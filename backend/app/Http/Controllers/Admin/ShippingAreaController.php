<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Exception;

class ShippingAreaController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    // Division
    public function division(){
        $divisions = ShipDivision::where('division_status',1)->orderBy('id','DESC')->get();
        return view('admin.ship-division.index',compact('divisions'));
    }

    public function divisionView($slug){
        $data = ShipDivision::where('division_status',1)->where('division_slug',$slug)->firstOrFail();
        return view('admin.ship-division.view',compact('data'));
    }

    public function divisionEdit($slug){
        $data = ShipDivision::where('division_status',1)->where('division_slug',$slug)->firstOrFail();
        return view('admin.ship-division.edit',compact('data'));
    }

    public function divisionInsert(Request $request){
        $request->validate([
            'division_name'=>'required',
        ],[
            'division_name.required'=>'Please Enter Division Name!'
        ]);

        $slug = uniqid('ship-division-15');
        $creator = Auth::user()->id;

        ShipDivision::insertGetId([
            'division_name'=>$request['division_name'],
            'division_slug'=>$slug,
            'division_creator'=>$creator,
            'created_at'=> Carbon::now(),
        ]);

        $notification = array(
            'messege' =>'Division Upload Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('division')->with($notification);

    }

    public function divisionUpdate(Request $request){
        $id = $request['id'];

        $request->validate([
            'division_name'=>'required',
        ],[
            'division_name.required'=>'Please Enter Division Name!'
        ]);

        $slug = uniqid('ship-division-15');
        $creator = Auth::user()->id;

        ShipDivision::where('division_status',1)->where('id',$id)->update([
            'division_name'=>$request['division_name'],
            'division_slug'=>$slug,
            'division_creator'=>$creator,
            'updated_at'=> Carbon::now(),
        ]);
        $notification = array(
            'messege' =>'Division Update Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('division')->with($notification);
    }

    public function divisionSoftdelete(Request $request){
        $id = $request['modal_id'];

        ShipDivision::where('division_status',1)->where('id',$id)->update([
            'division_status'=>0,
        ]);

        $notification = array(
            'messege' =>'Division Softdelete Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('division')->with($notification);
    }


    // District
    public function district(){
        $divisions = ShipDivision::where('division_status',1)->orderBy('id','DESC')->get();
        $districts = ShipDistrict::where('district_status',1)->orderBy('id','DESC')->get();
        return view('admin.ship-district.index',compact('districts','divisions'));
    }

    public function districtView($slug){
        $data = ShipDistrict::where('district_status',1)->where('district_slug',$slug)->firstOrFail();
        return view('admin.ship-district.view',compact('data'));
    }

    public function districtEdit($slug){
        $divisions = ShipDivision::where('division_status',1)->orderBy('id','DESC')->get();
        $district = ShipDistrict::where('district_status',1)->where('district_slug',$slug)->firstOrFail();
        return view('admin.ship-district.edit',compact('district','divisions'));
    }

    public function districtInsert(Request $request){
        $request->validate([
            'division_id'=>'required',
            'district_name'=>'required',
        ],[
            'division_id.required'=>'Please Enter Division Name!',
            'district_name.required'=>'Please Enter District Name!',
        ]);

        $slug = uniqid('ship-district-15');
        $creator = Auth::user()->id;

        ShipDistrict::insertGetId([
            'division_id'=>$request['division_id'],
            'district_name'=>$request['district_name'],
            'district_slug'=>$slug,
            'district_creator'=>$creator,
            'created_at'=> Carbon::now(),
        ]);

        $notification = array(
            'messege' =>'District Upload Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('district')->with($notification);

    }

    public function districtUpdate(Request $request){
        $id = $request['id'];

        $request->validate([
            'division_id'=>'required',
            'district_name'=>'required',
        ],[
            'division_id.required'=>'Please Enter Division Name!',
            'district_name.required'=>'Please Enter District Name!',
        ]);

        $slug = uniqid('ship-district-15');
        $creator = Auth::user()->id;

        ShipDistrict::where('district_status',1)->where('id',$id)->update([
            'division_id'=>$request['division_id'],
            'district_name'=>$request['district_name'],
            'district_slug'=>$slug,
            'district_creator'=>$creator,
            'updated_at'=> Carbon::now(),
        ]);
        $notification = array(
            'messege' =>'district Update Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('district')->with($notification);
    }

    public function districtSoftdelete(Request $request){
        $id = $request['modal_id'];

        ShipDistrict::where('district_status',1)->where('id',$id)->update([
            'district_status'=>0,
        ]);

        $notification = array(
            'messege' =>'district Softdelete Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('district')->with($notification);
    }


    // State
    public function state(){
        $divisions = ShipDivision::where('division_status',1)->orderBy('id','DESC')->get();
        $states = ShipState::where('state_status',1)->orderBy('id','DESC')->get();
        return view('admin.ship-state.index',compact('states','divisions'));
    }

    public function getDistrict($dis_id){
        $subcat = ShipDistrict::where('division_id',$dis_id)->orderBy('district_name','ASC')->get();
        return json_encode($subcat);
    }

    public function stateView($slug){
        $state = ShipState::where('state_status',1)->where('state_slug',$slug)->firstOrFail();
        return view('admin.ship-state.view',compact('state'));
    }

    public function stateEdit($slug){
        $divisions = ShipDivision::where('division_status',1)->orderBy('id','DESC')->get();
        $districts = ShipDistrict::where('district_status',1)->orderBy('id','DESC')->get();
        $state = ShipState::where('state_status',1)->where('state_slug',$slug)->firstOrFail();
        return view('admin.ship-state.edit',compact('state','districts','divisions'));
    }

    public function stateInsert(Request $request){
        $request->validate([
            'division_id'=>'required',
            'district_id'=>'required',
            'state_name'=>'required',
        ],[
            'division_id.required'=>'Please Enter Divisition Name!',
            'district_id.required'=>'Please Enter District Name!',
            'state_name.required'=>'Please Enter State Name!',
        ]);

        $slug = uniqid('ship-state-15');
        $creator = Auth::user()->id;

        ShipState::insertGetId([
            'division_id'=>$request['division_id'],
            'district_id'=>$request['district_id'],
            'state_name'=>$request['state_name'],
            'state_slug'=>$slug,
            'state_creator'=>$creator,
            'created_at'=> Carbon::now(),
        ]);

        $notification = array(
            'messege' =>'state Upload Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('state')->with($notification);

    }

    public function stateUpdate(Request $request){
        $id = $request['id'];

        $request->validate([
            'division_id'=>'required',
            'district_id'=>'required',
            'state_name'=>'required',
        ],[
            'division_id.required'=>'Please Enter Divisition Name!',
            'district_id.required'=>'Please Enter District Name!',
            'state_name.required'=>'Please Enter State Name!',
        ]);

        $slug = uniqid('ship-state-15');
        $creator = Auth::user()->id;

        ShipState::where('state_status',1)->where('id',$id)->update([
            'division_id'=>$request['division_id'],
            'district_id'=>$request['district_id'],
            'state_name'=>$request['state_name'],
            'state_slug'=>$slug,
            'state_creator'=>$creator,
            'updated_at'=> Carbon::now(),
        ]);
        $notification = array(
            'messege' =>'state Update Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('state')->with($notification);
    }

    public function stateSoftdelete(Request $request){
        $id = $request['modal_id'];

        ShipState::where('state_status',1)->where('id',$id)->update([
            'state_status'=>0,
        ]);

        $notification = array(
            'messege' =>'state Softdelete Success!',
            'alert-type' =>'success',
        );
        return redirect()->route('state')->with($notification);
    }


    //  ===================================================================
    //  ==================== Shipping Division API SECTION ===========================
    //  ===================================================================

    public function getWebsiteShippingDivision($id = null){

        try {

            if ($id == null) {
                return ShipDivision::where('division_status', 1)->get();
            } else {
                return ShipDivision::where('id', $id)->where('division_status', 1)->first();
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

    public function saveWebsiteShippingDivision(Request $request){
        $rules = [
            'division_name' => 'required',
        ];

        $customMessage = [
            'division_name.required' => 'division name field is required!'
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

            $slug = uniqid('ship-division-15');
            // $creator = Auth::user()->id;

            $insertDivision = ShipDivision::insertGetId([
                'division_name'=>$request['division_name'],
                'division_slug'=>$slug,
                // 'division_creator'=>$creator,
                'created_at'=> Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertDivision]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteShippingDivision(Request $request, $id){

        try {
            $slug = uniqid('ship-division-15');
            // $creator = Auth::user()->id;

            $updateDivision = ShipDivision::where('division_status',1)->where('id',$id)->update([
                'division_name'=>$request['division_name'],
                'division_slug'=>$slug,
                // 'division_creator'=>$creator,
                'updated_at'=> Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateDivision]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteShippingDivision($id = null){

        try {
            ShipDivision::where('division_status',1)->where('id',$id)->update([
                'division_status'=>0,
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



    //  ===================================================================
    //  ==================== Shipping District API SECTION ===========================
    //  ===================================================================

    public function getWebsiteShippingDistrict($id = null){

        try {

            if ($id == null) {
                return ShipDistrict::where('district_status', 1)->get();
            } else {
                return ShipDistrict::where('id', $id)->where('district_status', 1)->first();
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

    public function saveWebsiteShippingDistrict(Request $request){
        $rules = [
            'district_name' => 'required',
        ];

        $customMessage = [
            'district_name.required' => 'district name field is required!'
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

            $slug = uniqid('ship-district-15');
            // $creator = Auth::user()->id;

            $insertDistrict = ShipDistrict::insertGetId([
                'division_id'=>$request['division_id'],
                'district_name'=>$request['district_name'],
                'district_slug'=>$slug,
                // 'district_creator'=>$creator,
                'created_at'=> Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertDistrict]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteShippingDistrict(Request $request, $id){

        try {
            $slug = uniqid('ship-district-15');
            // $creator = Auth::user()->id;

            $updateDistrict = ShipDistrict::where('district_status',1)->where('id',$id)->update([
                'division_id'=>$request['division_id'],
                'district_name'=>$request['district_name'],
                'district_slug'=>$slug,
                // 'district_creator'=>$creator,
                'updated_at'=> Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateDistrict]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteShippingDistrict($id = null){

        try {
            ShipDistrict::where('district_status',1)->where('id',$id)->update([
                'district_status'=>0,
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





    //  ===================================================================
    //  ==================== Shipping State API SECTION ===========================
    //  ===================================================================

    public function getWebsiteShippingState($id = null){

        try {

            if ($id == null) {
                return ShipState::where('state_status', 1)->get();
            } else {
                return ShipState::where('id', $id)->where('state_status', 1)->first();
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

    public function saveWebsiteShippingState(Request $request){
        $rules = [
            'state_name' => 'required',
        ];

        $customMessage = [
            'state_name.required' => 'state name field is required!'
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

            $slug = uniqid('ship-state-15');
            // $creator = Auth::user()->id;

            $insertState = ShipState::insertGetId([
                'division_id'=>$request['division_id'],
                'district_id'=>$request['district_id'],
                'state_name'=>$request['state_name'],
                'state_slug'=>$slug,
                // 'state_creator'=>$creator,
                'created_at'=> Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertState]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteShippingState(Request $request, $id){

        try {
            $slug = uniqid('ship-state-15');
            // $creator = Auth::user()->id;

            $updateState = ShipState::where('state_status',1)->where('id',$id)->update([
                'division_id'=>$request['division_id'],
                'district_id'=>$request['district_id'],
                'state_name'=>$request['state_name'],
                'state_slug'=>$slug,
                // 'state_creator'=>$creator,
                'updated_at'=> Carbon::now(),
            ]);

            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateState]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteShippingState($id = null){

        try {
            ShipState::where('state_status',1)->where('id',$id)->update([
                'state_status'=>0,
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
