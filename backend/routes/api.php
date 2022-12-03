<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Basic routes
Route::get('/get-basics/{id?}', [WebsiteController::class, 'getWebsiteBasic']);

//Social Media routes
Route::get('/get-social-media/{id?}', [WebsiteController::class, 'getWebsiteSocialMedia']);

//Social Media routes
Route::get('/get-contact-information/{id?}', [WebsiteController::class, 'getWebsiteContactInformation']);

//Banner routes
Route::get('/get-banners/{id?}', [WebsiteController::class, 'getWebsiteBanner']);

//Brand routes
Route::get('/get-brands/{id?}', [WebsiteController::class, 'getWebsiteBrand']);

//Category routes
Route::get('/get-categories/{id?}', [WebsiteController::class, 'getWebsiteCategory']);

//SubCategory routes
Route::get('/get-sub-categories/{id?}', [WebsiteController::class, 'getWebsiteSubCategory']);

//SubSubCategory routes
Route::get('/get-sub-sub-categories/{id?}', [WebsiteController::class, 'getWebsiteSubSubCategory']);

//Coupon routes
Route::get('/get-coupon/{id?}', [WebsiteController::class, 'getWebsiteCoupon']);

//Color routes
Route::get('/get-color/{id?}', [WebsiteController::class, 'getWebsiteColor']);

//Product routes
Route::get('/get-product/{id?}', [WebsiteController::class, 'getWebsiteProduct']);

//Shipping Division routes
Route::get('/get-shipping-division/{id?}', [WebsiteController::class, 'getWebsiteShippingDivision']);

//Shipping District routes
Route::get('/get-shipping-district/{id?}', [WebsiteController::class, 'getWebsiteShippingDistrict']);

//Shipping State routes
Route::get('/get-shipping-state/{id?}', [WebsiteController::class, 'getWebsiteShippingState']);


