<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Exception;

class SubSubCategoryController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $categories=Category::where('category_status',1)->orderBy('id','ASC')->get();
        $subSubCategory=SubSubCategory::where('subsubcategory_status',1)->orderBy('id','ASC')->get();
        return view('admin.sub-sub-category.index',compact('categories','subSubCategory'));
    }

    public function getSubCat($cat_id){
        $subcat = Subcategory::where('category_id',$cat_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);
    }

    public function view($slug){
        $data = SubSubCategory::where('subsubcategory_status',1)->where('subsubcategory_slug',$slug)->firstOrFail();
        return view('admin.sub-sub-category.view',compact('data'));
    }

    public function edit($slug){
        $category=Category::where('category_status',1)->orderBy('id','DESC')->get();
        $subcategory=Subcategory::where('subcategory_status',1)->orderBy('id','DESC')->get();
        $subsubcategory = SubSubCategory::where('subsubcategory_status',1)->where('subsubcategory_slug',$slug)->firstOrFail();
        return view('admin.sub-sub-category.edit',compact('subsubcategory','category','subcategory'));
    }

    public function insert(Request $request){
        $request->validate([
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'subsubcategory_name'=>'required',
        ],[
            'category_id.required'=>'Please enter category name!',
            'subcategory_id.required'=>'Please enter subcategory name!',
            'subsubcategory_name.required'=>'Please enter sub subcategory name!',
        ]);

        $slug = Str::slug($request['subsubcategory_name'], '-');
        $creator = Auth::user()->id;

        SubSubCategory::insertGetId([
            'category_id'=>$request['category_id'],
            'subcategory_id'=>$request['subcategory_id'],
            'subsubcategory_name'=>$request['subsubcategory_name'],
            'subsubcategory_slug'=>$slug,
            'subsubcategory_creator'=>$creator,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'messege' =>'Sub-SubCategory Upload Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('sub-sub-category')->with($notification);
    }

    public function update(Request $request){
        $id=$request['id'];
        $request->validate([
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'subsubcategory_name'=>'required',
        ],[
            'category_id.required'=>'Please enter category name!',
            'subcategory_id.required'=>'Please enter subcategory name!',
            'subsubcategory_name.required'=>'Please enter sub subcategory name!',
        ]);

        $slug = Str::slug($request['subsubcategory_name'], '-');
        $creator = Auth::user()->id;
        SubSubCategory::where('id',$id)->update([
            'category_id'=>$request['category_id'],
            'subcategory_id'=>$request['subcategory_id'],
            'subsubcategory_name'=>$request['subsubcategory_name'],
            'subsubcategory_slug'=>$slug,
            'subsubcategory_creator'=>$creator,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'messege' =>'Sub-SubCategory Update Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('sub-sub-category')->with($notification);
    }

    public function softdelete(Request $request){
        $id=$request['modal_id'];
        SubSubCategory::where('subsubcategory_status',1)->where('id',$id)->update([
            'subsubcategory_status'=>0,
        ]);

        $notification = array(
            'messege' =>'Sub-SubCategory Softdelete Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('sub-sub-category')->with($notification);
    }


    //  ===================================================================
    //  ==================== SubSubCategory API SECTION ===========================
    //  ===================================================================


    public function getWebsiteSubSubCategory($id = null){

        try {

            if ($id == null) {
                return SubSubCategory::where('subsubcategory_status', 1)->get();
            } else {
                return SubSubCategory::where('id', $id)->where('subsubcategory_status', 1)->first();
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

    public function saveWebsiteSubSubCategory(Request $request){
        $rules = [
            'subsubcategory_name' => 'required',
        ];

        $customMessage = [
            'subsubcategory_name.required' => 'sub sub category name field is required!'
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

            $slug = Str::slug($request['subsubcategory_name'], '-');
            // $creator = Auth::user()->id;

            $insertSubSubCategory = SubSubCategory::insertGetId([
                'category_id'=>$request['category_id'],
                'subcategory_id'=>$request['subcategory_id'],
                'subsubcategory_name'=>$request['subsubcategory_name'],
                'subsubcategory_slug'=>$slug,
                // 'subsubcategory_creator'=>$creator,
                'created_at' => Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertSubSubCategory]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteSubSubCategory(Request $request, $id){

        try {
            $slug = Str::slug($request['subsubcategory_name'], '-');
            // $creator = Auth::user()->id;

            $updateSubCategory = SubSubCategory::where('id',$id)->update([
                'category_id'=>$request['category_id'],
                'subcategory_id'=>$request['subcategory_id'],
                'subsubcategory_name'=>$request['subsubcategory_name'],
                'subsubcategory_slug'=>$slug,
                // 'subsubcategory_creator'=>$creator,
                'updated_at' => Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateSubCategory]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteSubSubCategory($id = null){

        try {
            SubSubCategory::where('subsubcategory_status',1)->where('id',$id)->update([
                'subsubcategory_status'=>0,
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
