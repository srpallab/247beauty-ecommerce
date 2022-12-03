<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInformation;
use App\Models\SocialMedia;
use App\Models\Basic;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Coupon;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Exception;

class WebsiteController extends Controller{
    public function index(){
        return view('website.home.home');
    }

    //  ===================================================================
    //  ==================== Basic API SECTION ===========================
    //  ===================================================================
    public function getWebsiteBasic($id = null){

        try {

            if ($id == null) {
                return Basic::where('basic_status', 1)->get();
            } else {
                return Basic::where('id', $id)->where('basic_status', 1)->first();
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

    //  ===================================================================
    //  ==================== SocialMedia API SECTION ======================
    //  ===================================================================
    public function getWebsiteSocialMedia($id = null){

        try {

            if ($id == null) {
                return SocialMedia::where('sm_status', 1)->get();
            } else {
                return SocialMedia::where('id', $id)->where('sm_status', 1)->first();
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

    //  ===================================================================
    //  ==================== Contact Information API SECTION ======================
    //  ===================================================================
    public function getWebsiteContactInformation($id = null){

        try {

            if ($id == null) {
                return ContactInformation::where('ci_status', 1)->get();
            } else {
                return ContactInformation::where('id', $id)->where('ci_status', 1)->first();
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

    //  ===================================================================
    //  ==================== BANNER API SECTION ===========================
    //  ===================================================================
    public function getWebsiteBanner($id = null){

        try {

            if ($id == null) {
                return Banner::where('ban_status', 1)->get();
            } else {
                return Banner::where('id', $id)->where('ban_status', 1)->first();
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

    //  ===================================================================
    //  ==================== SubCategory API SECTION ===========================
    //  ===================================================================
    public function getWebsiteSubCategory($id = null){

        try {

            if ($id == null) {
                return SubCategory::where('subcategory_status', 1)->get();
            } else {
                return SubCategory::where('id', $id)->where('subcategory_status', 1)->first();
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

    //  ===================================================================
    //  ==================== Product API SECTION ===========================
    //  ===================================================================
    public function getWebsiteProduct($id = null){

        try {

            if ($id == null) {
                return Product::where('product_status', 1)->get();
            } else {
                return Product::where('id', $id)->where('product_status', 1)->first();
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
}
