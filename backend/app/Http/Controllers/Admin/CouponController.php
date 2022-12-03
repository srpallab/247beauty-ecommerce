<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Coupon;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Exception;

class CouponController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $coupons = Coupon::where('coupon_status',1)->orderBy('id','DESC')->get();
        return view('admin.coupon.index',compact('coupons'));
    }

    public function view($slug){
        $data = Coupon::where('coupon_status',1)->where('coupon_slug',$slug)->firstOrFail();
        return view('admin.coupon.view',compact('data'));
    }

    public function edit($slug){
        $data = Coupon::where('coupon_status',1)->where('coupon_slug',$slug)->firstOrFail();
        return view('admin.coupon.edit',compact('data'));
    }

    public function insert(Request $request){

        $slug = uniqid('coupon-15');
        $creator = Auth::user()->id;

        Coupon::insertGetId([
            'coupon_name'=>$request['coupon_name'],
            'coupon_discount'=>$request['coupon_discount'],
            'coupon_validity'=>$request['coupon_validity'],
            'coupon_slug'=>$slug,
            'coupon_creator'=>$creator,
            'created_at'=> Carbon::now(),
        ]);

        $notification=array(
            'messege'=>'Coupon Upload Success!',
            'alert-type'=>'success',
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request){
        $id = $request['id'];

        $slug = uniqid('coupon-15');
        $creator = Auth::user()->id;

        Coupon::where('coupon_status',1)->where('id',$id)->update([
            'coupon_name'=>$request['coupon_name'],
            'coupon_discount'=>$request['coupon_discount'],
            'coupon_validity'=>$request['coupon_validity'],
            'coupon_slug'=>$slug,
            'coupon_creator'=>$creator,
            'updated_at'=> Carbon::now(),
        ]);

        $notification=array(
            'messege'=>'Coupon update Success!',
            'alert-type'=>'success'
        );
        return Redirect()->route('coupon')->with($notification);
    }

    public function softdelete(Request $request){
        $id = $request['modal_id'];

        Coupon::where('coupon_status',1)->where('id',$id)->update([
            'coupon_status'=>0
        ]);

        $notification=array(
            'messege'=>'Coupon softdelete Success!',
            'alert-type'=>'success'
        );
        return Redirect()->route('coupon')->with($notification);
    }



    //  ===================================================================
    //  ==================== Coupon API SECTION ===========================
    //  ===================================================================


    public function getWebsiteCoupon($id = null){

        try {

            if ($id == null) {
                return Coupon::where('coupon_status', 1)->get();
            } else {
                return Coupon::where('id', $id)->where('coupon_status', 1)->first();
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

    public function saveWebsiteCoupon(Request $request){
        $rules = [
            'coupon_validity' => 'required',
        ];

        $customMessage = [
            'coupon_validity.required' => 'coupon validity field is required!'
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

            $slug = uniqid('coupon-15');
            // $creator = Auth::user()->id;

            $insertCoupon = Coupon::insertGetId([
                'coupon_name'=>$request['coupon_name'],
                'coupon_discount'=>$request['coupon_discount'],
                'coupon_validity'=>$request['coupon_validity'],
                'coupon_slug'=>$slug,
                // 'coupon_creator'=>$creator,
                'created_at'=> Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertCoupon]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteCoupon(Request $request, $id){

        try {
            $slug = uniqid('coupon-15');
            // $creator = Auth::user()->id;

            $updateCoupon = Coupon::where('coupon_status',1)->where('id',$id)->update([
                'coupon_name'=>$request['coupon_name'],
                'coupon_discount'=>$request['coupon_discount'],
                'coupon_validity'=>$request['coupon_validity'],
                'coupon_slug'=>$slug,
                // 'coupon_creator'=>$creator,
                'updated_at'=> Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateCoupon]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteCoupon($id = null){

        try {
            Coupon::where('coupon_status',1)->where('id',$id)->update([
                'coupon_status'=>0,
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
