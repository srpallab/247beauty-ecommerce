<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Exception;

class CategoryController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $categories = Category::where('category_status',1)->orderBy('id','DESC')->get();
        return view('admin.category.index',compact('categories'));
    }
    public function edit($slug){
        $data = Category::where('category_status',1)->where('category_slug', $slug)->firstOrFail();
        return view('admin.category.edit',compact('data'));
    }
    public function view($slug){
        $data = Category::where('category_status',1)->where('category_slug', $slug)->firstOrFail();
        return view('admin.category.view',compact('data'));
    }
    public function insert(Request $request){

        $creator = Auth::user()->id;
        $slug = Str::slug($request['category_name'], '-');

        $insert = Category::insertGetId([
            'category_image'=>$request['category_image'],
            'category_name'=>$request['category_name'],
            'category_slug'=>$slug,
            'category_creator'=>$creator,
            'created_at' => Carbon::now(),
        ]);

        if($request->hasFile('category_image')){
            $image1 = $request->file('category_image');
            $imageName1 = 'category_image_'.$insert.'_'.time().'.'.$image1->getClientOriginalExtension();
            Image::make($image1)->resize(200,200)->save('uploads/admin/category/'.$imageName1);
            Category::where('id',$insert)->update([
                'category_image' => $imageName1
            ]);
        }

        $notification = array(
            'messege'=>'Category Upload Success!',
            'alert-type'=>'success',
        );

        return redirect()->back()->with($notification);
    }
    public function update(Request $request){

        $id= $request->id;

        $creator = Auth::user()->id;
        $slug = Str::slug($request['category_name'], '-');

        if($request->hasFile('category_image')){
            $image=$request->file('category_image');
            $category_image='category_image_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/admin/category/'.$category_image);

            Category::where('id',$id)->update([
                'category_image'=>$category_image,
            ]);
        }

        Category::where('category_status',1)->where('id',$id)->update([
            'category_name'=>$request['category_name'],
            'category_slug'=>$slug,
            'category_creator'=>$creator,
            'updated_at'=>Carbon::now(),
        ]);

        $notification=array(
            'messege'=>'Category Update Success!',
            'alert-type'=>'success',
        );
        return Redirect()->route('category')->with($notification);
    }

    public function softdelete(Request $request){
        $id = $request['modal_id'];

        Category::where('category_status',1)->where('id',$id)->update([
            'category_status'=>0,
        ]);

        $notification=array(
            'messege'=>'Category Softdelete Success!',
            'alert-type'=>'succes'
        );
        return Redirect()->back()->with($notification);
    }



    //  ===================================================================
    //  ==================== Category API SECTION ===========================
    //  ===================================================================


    public function getWebsiteCategory($id = null){

        try {

            if ($id == null) {
                return Category::where('category_status', 1)->get();
            } else {
                return Category::where('id', $id)->where('category_status', 1)->first();
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

    public function saveWebsiteCategory(Request $request){
        $rules = [
            'category_image' => 'required',
        ];

        $customMessage = [
            'category_image.required' => 'Image field is required!'
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

            $slug = uniqid('category-15');
            // $creator = Auth::user()->id;

            $insertCategory = Category::insertGetId([
                'category_image'=>$request['category_image'],
                'category_name'=>$request['category_name'],
                'category_slug'=>$slug,
                // 'category_creator'=>$creator,
                'created_at' => Carbon::now(),
            ]);

            if($request->hasFile('category_image')){
                $image1=$request->file('category_image');
                $imageName1='category_image_'.$insertCategory.'_'.time().'.'.$image1->getClientOriginalExtension();
                Image::make($image1)->resize(200,200)->save('uploads/admin/category/'.$imageName1);
                Category::where('id',$insertCategory)->update([
                    'category_image'=>$imageName1
                ]);
            }

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertCategory]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteCategory(Request $request, $id){

        try {
            $slug = uniqid('category-15');
            // $creator = Auth::user()->id;

            if($request->hasFile('category_image')){
                $image=$request->file('category_image');
                $category_image='category_image_'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->save('uploads/admin/category/'.$category_image);

                Category::where('category_status',1)->where('id',$id)->update([
                    'category_image'=>$category_image,
                ]);
            }

            $updateCategory = Category::where('category_status',1)->where('id',$id)->update([
                'category_name'=>$request['category_name'],
                'category_slug'=>$slug,
                // 'category_creator'=>$creator,
                'updated_at'=>Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateCategory]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteCategory($id = null){

        try {
            Category::where('category_status',1)->where('id',$id)->update([
                'category_status'=>0,
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
