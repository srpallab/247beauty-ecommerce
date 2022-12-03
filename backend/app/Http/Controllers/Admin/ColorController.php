<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Exception;

class ColorController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $colors = Color::where('color_status',1)->orderBy('id','ASC')->get();
        return view('admin.color.index',compact('colors'));
    }

    public function view($slug){
        $data = Color::where('color_status',1)->where('color_slug',$slug)->firstOrFail();
        return view('admin.color.view',compact('data'));
    }
    public function edit($slug){
        $data = Color::where('color_status',1)->where('color_slug',$slug)->firstOrFail();
        return view('admin.color.edit',compact('data'));
    }

    public function insert(Request $request){
        $slug = uniqid('color-15');
        $creator = Auth::user()->id;

        $insert = Color::insertGetId([
            'color_name'=>$request['color_name'],
            'color_code'=>$request['color_code'],
            'color_slug'=>$slug,
            'color_creator'=>$creator,
            'created_at'=>carbon::now(),
        ]);

        $notification=array(
            'messege'=>'Color Upload Success!',
            'alert-type'=>'success',
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request){
        $id = $request['id'];

        $slug = uniqid('color-15');
        $creator = Auth::user()->id;

        Color::where('color_status',1)->where('id',$id)->update([
            'color_name'=>$request['color_name'],
            'color_code'=>$request['color_code'],
            'color_slug'=>$slug,
            'color_creator'=>$creator,
            'updated_at'=>Carbon::now(),
        ]);

        $notification=array(
            'messege'=>'Color Update Success!',
            'alert-type'=>'success',
        );
        return redirect()->route('color')->with($notification);
    }

    public function softdelete(Request $request){
        $id = $request['modal_id'];

        Color::where('color_status',1)->where('id',$id)->update([
            'color_status'=>0
        ]);

        $notification=array(
            'messege'=>'Color Softdelete Success!',
            'alert-type'=>'success',
        );
        return redirect()->back()->with($notification);
    }


    //  ===================================================================
    //  ==================== Color API SECTION ===========================
    //  ===================================================================


    public function getWebsiteColor($id = null){

        try {

            if ($id == null) {
                return Color::where('color_status', 1)->get();
            } else {
                return Color::where('id', $id)->where('color_status', 1)->first();
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

    public function saveWebsiteColor(Request $request){
        $rules = [
            'color_name' => 'required',
        ];

        $customMessage = [
            'color_name.required' => 'color field is required!'
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

            $slug = uniqid('color-15');
            // $creator = Auth::user()->id;

            $insertColor = Color::insertGetId([
                'color_name'=>$request['color_name'],
                'color_code'=>$request['color_code'],
                'color_slug'=>$slug,
                // 'color_creator'=>$creator,
                'created_at'=>carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertColor]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteColor(Request $request, $id){

        try {
            $slug = uniqid('color-15');
            // $creator = Auth::user()->id;

            $updateColor = Color::where('color_status',1)->where('id',$id)->update([
                'color_name'=>$request['color_name'],
                'color_code'=>$request['color_code'],
                'color_slug'=>$slug,
                // 'color_creator'=>$creator,
                'updated_at'=>Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateColor]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteColor($id = null){

        try {
            Color::where('color_status',1)->where('id',$id)->update([
                'color_status'=>0,
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
