<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\SubSubCategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShippingAreaController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ================= Admin Routes ======================
Route::group(['prefix'=>'admin'], function(){
    route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

    //My Profile routes
    route::get('my/profile',[AdminController::class,'profile'])->name('admin_profile');
    Route::post('my/profile/update',[AdminController::class,'profileUpdate'])->name('profile.update');
    Route::get('my/profile/image/change',[AdminController::class,'ProfileImagePage'])->name('profile.image');
    Route::post('my/profile/image/update',[AdminController::class,'imageUpdate'])->name('image.update');
    Route::get('my/profile/password/change',[AdminController::class,'ProfilePasswordPage'])->name('admin_password_change');
    Route::post('my/profile/password/update',[AdminController::class,'ProfilePasswordUpdate'])->name('profile.PasswordUpdate');
    Route::get('admin/logout',[UserController::class,'adminLogout'])->name('admin.logout');

    // Basic
    Route::get('dashboard/general/basic', [GeneralController::class, 'basic'])->name('basic');
    Route::post('dashboard/general/basic/update', [GeneralController::class, 'update_basic'])->name('update_basic');
    // Social Media
    Route::get('dashboard/general/social', [GeneralController::class, 'social'])->name('social');
    Route::post('dashboard/general/social/update', [GeneralController::class, 'update_social'])->name('update_social');
    // Contact Information
    Route::get('dashboard/general/contactinformation', [GeneralController::class, 'contactinformation'])->name('contactinformation');
    Route::post('dashboard/general/contactinformation/update', [GeneralController::class, 'update_contactinformation'])->name('update_contactinformation');

    //Banner routes
    route::get('banner',[BannerController::class,'index'])->name('banner');
    route::post('banner/submit',[BannerController::class,'insert'])->name('banner.insert');
    route::get('banner/view/{slug}',[BannerController::class,'view'])->name('banner.view');
    route::get('banner/edit/{slug}',[BannerController::class,'edit'])->name('banner.edit');
    route::post('banner/update',[BannerController::class,'update'])->name('banner.update');
    route::post('banner/softdelete',[BannerController::class,'softdelete'])->name('banner.softdelete');

    //Brand routes
    route::get('brand',[BrandController::class,'index'])->name('brand');
    route::post('brand/submit',[BrandController::class,'insert'])->name('brand.insert');
    route::get('brand/view/{slug}',[BrandController::class,'view'])->name('brand.view');
    route::get('brand/edit/{slug}',[BrandController::class,'edit'])->name('brand.edit');
    route::post('brand/update',[BrandController::class,'update'])->name('brand.update');
    route::post('brand/softdelete',[BrandController::class,'softdelete'])->name('brand.softdelete');

    //Category routes
    route::get('category',[CategoryController::class,'index'])->name('category');
    route::post('category/submit',[CategoryController::class,'insert'])->name('category.insert');
    route::get('category/view/{slug}',[CategoryController::class,'view'])->name('category.view');
    route::get('category/edit/{slug}',[CategoryController::class,'edit'])->name('category.edit');
    route::post('category/update',[CategoryController::class,'update'])->name('category.update');
    route::post('category/softdelete',[CategoryController::class,'softdelete'])->name('category.softdelete');

    //SubCategory Routes
    route::get('sub-category',[SubCategoryController::class,'index'])->name('sub-category');
    Route::get('/subcategory/ajax/{cat_id}',[SubSubCategoryController::class,'getSubCat']);
    route::get('sub-category/edit/{slug}',[SubCategoryController::class,'edit'])->name('sub-category.edit');
    route::get('sub-category/view/{slug}',[SubCategoryController::class,'view'])->name('sub-category.view');
    route::post('sub-category/submit',[SubCategoryController::class,'insert'])->name('sub-category.insert');
    route::post('sub-category/update',[SubCategoryController::class,'update'])->name('sub-category.update');
    route::post('sub-category/softdelete',[SubCategoryController::class,'softdelete'])->name('sub-category.softdelete');
    Route::get('admin/sub-category-delete/{category_id}',[SubCategoryController::class,'delete']);

    //Sub Sub Category routes
    route::get('sub-sub-category',[SubSubCategoryController::class,'index'])->name('sub-sub-category');
    Route::get('/subcategory/ajax/{cat_id}',[SubSubCategoryController::class,'getSubCat']);
    route::post('sub-sub-category/submit',[SubSubCategoryController::class,'insert'])->name('sub-sub-category.insert');
    route::get('sub-sub-category/edit/{slug}',[SubSubCategoryController::class,'edit'])->name('sub-sub-category.edit');
    route::get('sub-sub-category/view/{slug}',[SubSubCategoryController::class,'view'])->name('sub-sub-category-view');
    route::post('sub-sub-category/update',[SubSubCategoryController::class,'update'])->name('sub-sub-category.update');
    route::post('sub-sub-category/softdelete',[SubSubCategoryController::class,'softdelete'])->name('sub-sub-category.softdelete');

    // Coupon
    route::get('coupon',[CouponController::class,'index'])->name('coupon');
    route::post('coupon/submit',[CouponController::class,'insert'])->name('coupon.insert');
    route::get('coupon/edit/{slug}',[CouponController::class,'edit'])->name('coupon.edit');
    route::get('coupon/view/{slug}',[CouponController::class,'view'])->name('coupon.view');
    route::post('coupon/update',[CouponController::class,'update'])->name('coupon.update');
    route::post('coupon/softdelete',[CouponController::class,'softdelete'])->name('coupon.softdelete');

    // Color
    route::get('color',[ColorController::class,'index'])->name('color');
    route::post('color/submit',[ColorController::class,'insert'])->name('color.insert');
    route::get('color/edit/{slug}',[ColorController::class,'edit'])->name('color.edit');
    route::get('color/view/{slug}',[ColorController::class,'view'])->name('color.view');
    route::post('color/update',[ColorController::class,'update'])->name('color.update');
    route::post('color/softdelete',[ColorController::class,'softdelete'])->name('color.softdelete');

    // Product
    route::get('product',[ProductController::class,'index'])->name('product');
    route::get('product/add',[ProductController::class,'add'])->name('product.add');
    Route::get('/subsubcategory/ajax/{subcat_id}',[ProductController::class,'getsubsubCat']);
    route::get('product/edit/{slug}',[ProductController::class,'edit'])->name('product.edit');
    route::get('product/view/{slug}',[ProductController::class,'view'])->name('product.view');
    route::post('product/submit',[ProductController::class,'insert'])->name('product.insert');
    route::post('product/update',[ProductController::class,'update'])->name('product.update');
    route::post('product/softdelete',[ProductController::class,'softdelete'])->name('product.softdelete');

    Route::post('product/thambnail/update',[ProductController::class,'thambnailUpdate'])->name('update-product-thambnail');

    route::post('product/multi-image/update',[ProductController::class,'multiImageUpdate'])->name('update.product.multi.image');
    route::get('product/multi-image/delete/{id}',[ProductController::class,'multiImageDelete'])->name('delete.product.multi.image');


    //Shipping Area routes

    // division
    route::get('division',[ShippingAreaController::class,'division'])->name('division');
    route::post('division/submit',[ShippingAreaController::class,'divisionInsert'])->name('division.insert');
    route::get('division/edit/{slug}',[ShippingAreaController::class,'divisionEdit'])->name('division.edit');
    route::get('division/view/{slug}',[ShippingAreaController::class,'divisionView'])->name('division.view');
    route::post('division/update',[ShippingAreaController::class,'divisionUpdate'])->name('division.update');
    route::post('division/softdelete',[ShippingAreaController::class,'divisionSoftdelete'])->name('division.softdelete');

    // District
    route::get('district',[ShippingAreaController::class,'district'])->name('district');
    route::post('district/submit',[ShippingAreaController::class,'districtInsert'])->name('district.insert');
    route::get('district/edit/{slug}',[ShippingAreaController::class,'districtEdit'])->name('district.edit');
    route::get('district/view/{slug}',[ShippingAreaController::class,'districtView'])->name('district.view');
    route::post('district/update',[ShippingAreaController::class,'districtUpdate'])->name('district.update');
    route::post('district/softdelete',[ShippingAreaController::class,'districtSoftdelete'])->name('district.softdelete');

    // state
    route::get('state',[ShippingAreaController::class,'state'])->name('state');
    Route::get('/district/ajax/{dis_id}',[ShippingAreaController::class,'getDistrict']);
    route::post('state/submit',[ShippingAreaController::class,'stateInsert'])->name('state.insert');
    route::get('state/edit/{slug}',[ShippingAreaController::class,'stateEdit'])->name('state.edit');
    route::get('state/view/{slug}',[ShippingAreaController::class,'stateView'])->name('state.view');
    route::post('state/update',[ShippingAreaController::class,'stateUpdate'])->name('state.update');
    route::post('state/softdelete',[ShippingAreaController::class,'stateSoftdelete'])->name('state.softdelete');

});

// ================= User Routes ======================
Route::group(['prefix'=>'user'], function(){
    route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::post('update/data',[UserController::class,'updateData'])->name('update-profile');
    Route::get('image',[UserController::class,'imagePage'])->name('user.image');
    Route::post('update/image',[UserController::class,'updateImage'])->name('update.image');
    Route::get('update/password',[UserController::class,'updatePassPage'])->name('update-password');
    Route::post('store/password',[UserController::class,'storePassword'])->name('password-store');
    Route::get('user/logout',[UserController::class,'userLogout'])->name('user.logout');

});

// ================= Website Routes ======================
// Website Route Start
Route::get('/',[WebsiteController::class, 'index']);
