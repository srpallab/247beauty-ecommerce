<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Exception;

class BrandController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $brand = Brand::where('brand_status',1)->orderBy('id','ASC')->get();
        return view('admin.brand.index',compact('brand'));
    }

    public function view($slug){
        $data = Brand::where('brand_status',1)->where('brand_slug',$slug)->firstOrFail();
        return view('admin.brand.view',compact('data'));
    }
    public function edit($slug){
        $data = Brand::where('brand_status',1)->where('brand_slug',$slug)->firstOrFail();
        return view('admin.brand.edit',compact('data'));
    }

    public function insert(Request $request){

        $slug = uniqid('brand-15');
        $creator = Auth::user()->id;

        $insert = Brand::insertGetId([
            'brand_name'=>$request['brand_name'],
            'brand_discount_amount'=>$request['brand_discount_amount'],
            'brand_image'=>$request['brand_image'],
            'top_brand'=>$request['top_brand'],
            'featuren_brand'=>$request['featuren_brand'],
            'brand_serial'=>$request['brand_serial'],
            'brand_slug'=>$slug,
            'brand_creator'=>$creator,
            'created_at'=>carbon::now(),
        ]);

        if($request->hasFile('brand_image')){
            $image1=$request->file('brand_image');
            $imageName1='brand_image_'.$insert.'_'.time().'.'.$image1->getClientOriginalExtension();
            Image::make($image1)->resize(200,200)->save('uploads/admin/brand/'.$imageName1);
            Brand::where('id',$insert)->update([
                'brand_image'=>$imageName1
            ]);
        }

        $notification=array(
            'messege'=>'Brand Upload Success!',
            'alert-type'=>'success',
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request){

        $id = $request['id'];

        $slug = uniqid('brand-15');
        $creator = Auth::user()->id;

        if($request->hasFile('brand_image')){
            $image=$request->file('brand_image');
            $brand_image='brand_image_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/brand/'.$brand_image);

            Brand::where('id',$id)->update([
                'brand_image'=>$brand_image,
            ]);
        }

        Brand::where('brand_status',1)->where('id',$id)->update([
            'brand_name'=>$request['brand_name'],
            'brand_discount_amount'=>$request['brand_discount_amount'],
            'top_brand'=>$request['top_brand'],
            'featuren_brand'=>$request['featuren_brand'],
            'brand_serial'=>$request['brand_serial'],
            'brand_slug'=>$slug,
            'brand_creator'=>$creator,
            'updated_at'=>Carbon::now(),
        ]);

        $notification=array(
            'messege'=>'Brand Update Success!',
            'alert-type'=>'success',
        );
        return redirect()->route('brand')->with($notification);
    }

    public function softdelete(Request $request){
        $id = $request['modal_id'];

        Brand::where('brand_status',1)->where('id',$id)->update([
            'brand_status'=>0
        ]);

        $notification=array(
            'messege'=>'Brand Softdelete Success!',
            'alert-type'=>'success',
        );
        return redirect()->back()->with($notification);
    }




    //  ===================================================================
    //  ==================== Brand API SECTION ===========================
    //  ===================================================================


    public function getWebsiteBrand($id = null){

        try {

            if ($id == null) {
                return Brand::where('brand_status', 1)->get();
            } else {
                return Brand::where('id', $id)->where('brand_status', 1)->first();
            }

            return response()->json(['success' => 'true', 'status_code' => '200']);
        }
        catch (ModelNotFoundException $ex) {
            return response()->json(['success' => 'false', 'status_code' => '404', 'error' => 'Invalid:Model Not Found']);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'error' => $ex->getMessage()]);
        }
    }

    public function saveWebsiteBrand(Request $request){
        $rules = [
            'brand_image' => 'required',
        ];

        $customMessage = [
            'brand_image.required' => 'Image field is required!'
        ];

        $validator = Validator::make($request->all(), $rules, $customMessage);

        if ($validator->fails()) {
            return response()->json([
                'success' => 'false',
                'status_code' => '401',
                'error' => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {

            $slug = uniqid('brand-15');
            // $creator = Auth::user()->id;

            $insertBrand = Brand::insertGetId([
                'brand_name'=>$request['brand_name'],
                'brand_discount_amount'=>$request['brand_discount_amount'],
                'brand_image'=>$request['brand_image'],
                'top_brand'=>$request['top_brand'],
                'featuren_brand'=>$request['featuren_brand'],
                'brand_serial'=>$request['brand_serial'],
                'brand_slug'=>$slug,
                // 'brand_creator'=>$creator,
                'created_at'=>carbon::now(),
            ]);

            if($request->hasFile('brand_image')){
                $image1=$request->file('brand_image');
                $imageName1='brand_image_'.$insertBrand.'_'.time().'.'.$image1->getClientOriginalExtension();
                Image::make($image1)->resize(200,200)->save('uploads/admin/brand/'.$imageName1);
                Brand::where('id',$insertBrand)->update([
                    'brand_image'=>$imageName1
                ]);
            }

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertBrand]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteBrand(Request $request, $id){

        try {
            $slug = uniqid('brand-15');
            // $creator = Auth::user()->id;

            if($request->hasFile('brand_image')){
                $image=$request->file('brand_image');
                $brand_image='brand_image_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->save('uploads/admin/brand/'.$brand_image);

                Brand::where('brand_status',1)->where('id',$id)->update([
                    'brand_image'=>$brand_image,
                ]);
            }

            $updateBrand = Brand::where('brand_status',1)->where('id',$id)->update([
                'brand_name'=>$request['brand_name'],
                'brand_discount_amount'=>$request['brand_discount_amount'],
                'top_brand'=>$request['top_brand'],
                'featuren_brand'=>$request['featuren_brand'],
                'brand_serial'=>$request['brand_serial'],
                'brand_slug'=>$slug,
                // 'brand_creator'=>$creator,
                'updated_at'=>Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateBrand]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteBrand($id = null){

        try {
            Brand::where('brand_status',1)->where('id',$id)->update([
                'brand_status'=>0
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200']);
        }
        catch (ModelNotFoundException $ex) {
            return response()->json(['success' => 'false', 'status_code' => '404', 'error' => 'Invalid:Model Not Found']);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'error' => $ex->getMessage()]);
        }
    }
}
