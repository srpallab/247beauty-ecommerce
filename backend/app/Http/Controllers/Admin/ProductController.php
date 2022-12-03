<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Brand;
use App\Models\Color;
use App\Models\MultiImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use PHPUnit\Framework\Constraint\Count;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Exception;


class ProductController extends Controller{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        $products = Product::where('product_status',1)->orderBy('id','ASC')->get();
        return view('admin.product.all',compact('products'));
    }
    public function add(){
        $colors = Color::where('color_status',1)->orderBy('id','ASC')->get();
        $brands = Brand::where('brand_status',1)->orderBy('id','ASC')->get();
        $categories = Category::where('category_status',1)->orderBy('category_name','ASC')->get();
        return view('admin.product.add',compact('categories','brands','colors'));
    }

    public function getsubsubCat($subcat_id){
        $subcat = SubSubCategory::where('subcategory_id',$subcat_id)->orderBy('subsubcategory_name','ASC')->get();
        return json_encode($subcat);
    }

    public function view($slug){
        $productVariants = ProductVariant::where('product_slug',$slug)->get();
        $multiImgs = MultiImage::where('product_slug',$slug)->get();
        $data = Product::where('product_status',1)->where('product_slug',$slug)->firstOrFail();
        return view('admin.product.view',compact('data','multiImgs','productVariants'));
    }
    public function edit($id){
        $multiImgs = MultiImage::where('id',$id)->latest()->get();
        $colors = Color::where('color_status',1)->orderBy('id','ASC')->get();
        $brands = Brand::where('brand_status',1)->orderBy('id','ASC')->get();
        $categories = Category::where('category_status',1)->orderBy('category_name','ASC')->get();
        $subCategories = SubCategory::where('subcategory_status',1)->orderBy('subcategory_name','ASC')->get();
        $productVariants = ProductVariant::where('pv_status',1)->where('product_id',$id)->orderBy('id','ASC')->get();
        $product = Product::where('product_status',1)->where('id',$id)->firstOrFail();
        return view('admin.product.edit',compact('product','productVariants','categories','subCategories','brands','colors','multiImgs'));
    }

    public function insert(Request $request){
        // dd($request->all());
        $creator = Auth::user()->id;
        $slug = Str::slug($request['product_name'], '-');

        // product thambnail start
        $image = $request->file('product_thambnail');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('uploads/admin/product/product_thambnail/'.$name_gen);
        $save_url = 'uploads/admin/product/product_thambnail/'.$name_gen;
        // product thambnail end

        $insert = Product::insertGetId([
            'product_name'=>$request['product_name'],
            'category_id'=>$request['category_id'],
            'subcategory_id'=>$request['subcategory_id'],
            'subsubcategory_id'=>$request['subsubcategory_id'],
            'brand_id'=>$request['brand_id'],
            'product_code'=>$request['product_code'],
            'product_qty'=>$request['product_qty'],
            'short_description'=>$request['short_description'],
            'product_thambnail' => $save_url,
            'best_seller'=>$request['best_seller'],
            'product_slug'=>$slug,
            'product_creator'=>$creator,
            'created_at'=>carbon::now(),
        ]);

        // Multiple Image Upload start
        $images = $request->file('multi_img');
        foreach ($images as $img) {
            $make_name= time().'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('uploads/admin/product/multi-image/'.$make_name);
            $uplodPath = 'uploads/admin/product/multi-image/'.$make_name;

            MultiImage::insert([
                'product_id' => $insert,
                'product_slug' => $slug,
                'photo_name' => $uplodPath,
                'created_at' => Carbon::now(),
            ]);
        }

        // Multiple Image Upload end

        // product variant start
        $pv_item = count($request->pv_selling_price);

        if($pv_item != NULL){
            for ($i=0; $i <$pv_item ; $i++) {
                $product_variant_loop = new ProductVariant();
                $product_variant_loop->product_id = $insert;
                $product_variant_loop->pv_name = $request->pv_name[$i];
                $product_variant_loop->pv_gram = $request->pv_gram[$i];
                $product_variant_loop->color_id = $request->color_id[$i];
                $product_variant_loop->pv_selling_price = $request->pv_selling_price[$i];
                $product_variant_loop->pv_discount_price = $request->pv_discount_price[$i];
                $product_variant_loop->pv_discount_percentage = $request->pv_discount_percentage[$i];
                $product_variant_loop->pv_qty = $request->pv_qty[$i];
                $product_variant_loop->product_slug = $slug;
                $product_variant_loop->save();
            }
        }
        // product variant end



        $notification=array(
            'messege'=>'Product Upload Success!',
            'alert-type'=>'success',
        );
        return redirect()->route('product')->with($notification);
    }

    public function update(Request $request){
        $id = $request['id'];

        $slug = Str::slug($request['product_name'], '-');
        $creator = Auth::user()->id;

        Product::where('product_status',1)->where('id',$id)->update([
            'product_name'=>$request['product_name'],
            'category_id'=>$request['category_id'],
            'subcategory_id'=>$request['subcategory_id'],
            'subsubcategory_id'=>$request['subsubcategory_id'],
            'brand_id'=>$request['brand_id'],
            'product_code'=>$request['product_code'],
            'product_qty'=>$request['product_qty'],
            'short_description'=>$request['short_description'],
            'best_seller'=>$request['best_seller'],
            'product_slug'=>$slug,
            'product_creator'=>$creator,
            'updated_at'=>Carbon::now(),
        ]);

        // Other Qualifications Start
        if($request->pv_selling_price == NULL){
            $notification=array(
                'messege'=>'Enter Minimum One Data!',
                'alert-type'=>'success',
            );
            return redirect()->back()->with($notification);
        }else{

            ProductVariant::where('product_id',$id)->delete();

            $pv_item = count($request->pv_selling_price);

            for ($i=0; $i <$pv_item ; $i++) {
                 $product_variant_loop = new ProductVariant();
                $product_variant_loop->product_id = $id;
                $product_variant_loop->pv_name = $request->pv_name[$i];
                $product_variant_loop->pv_gram = $request->pv_gram[$i];
                $product_variant_loop->color_id = $request->color_id[$i];
                $product_variant_loop->pv_selling_price = $request->pv_selling_price[$i];
                $product_variant_loop->pv_discount_price = $request->pv_discount_price[$i];
                $product_variant_loop->pv_discount_percentage = $request->pv_discount_percentage[$i];
                $product_variant_loop->pv_qty = $request->pv_qty[$i];
                $product_variant_loop->product_slug = $slug;
                $product_variant_loop->save();
            }
        }
        // Other Qualifications End

        $notification=array(
            'messege'=>'Product Update Success!',
            'alert-type'=>'success',
        );
        return redirect()->route('product')->with($notification);
    }

    // Product main thambnail update start
    public function thambnailUpdate(Request $request){
        $pro_id = $request->product_id;
        $oldImage = $request->old_img;
        unlink($oldImage);

        $image = $request->file('product_thambnail');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('uploads/admin/product/product_thambnail/'.$name_gen);
        $save_url = 'uploads/admin/product/product_thambnail/'.$name_gen;

        Product::findOrFail($pro_id)->update([
            'product_thambnail' => $save_url,
            'updated_at' => Carbon::now(),

        ]);

        $notification=array(
            'messege'=>'Product Thambnail Update Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    // Product main thambnail update end

    // Product Multiple Image start
    public function multiImageUpdate(Request $request){
        $imgs = $request->multiImg;

        foreach ($imgs as $id => $img) {
            $imgDel = MultiImage::findOrFail($id);
            unlink($imgDel->photo_name);
            $make_name=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('uploads/admin/product/multi-image/'.$make_name);
            $uplodPath = 'uploads/admin/product/multi-image/'.$make_name;

            MultiImage::where('id',$id)->update([
            'photo_name' => $uplodPath,
            'updated_at' => Carbon::now(),
           ]);

        }
        $notification=array(
            'messege'=>'Product Image Update Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    // Product Multiple Image end

    // Multi Image Delete Start
    public function multiImageDelete($id){
        $oldimg = MultiImage::findOrFail($id);
        unlink($oldimg->photo_name);
        MultiImage::findOrFail($id)->delete();

        $notification=array(
            'messege'=>'Product Image Dlete Success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    // Multi Image Delete Start

    public function softdelete(Request $request){
        $id = $request['modal_id'];

        Product::where('product_status',1)->where('id',$id)->update([
            'product_status'=>0
        ]);

        $notification=array(
            'messege'=>'Product Softdelete Success!',
            'alert-type'=>'success',
        );
        return redirect()->back()->with($notification);
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

    public function saveWebsiteProduct(Request $request){
        $rules = [
            'product_name' => 'required',
        ];

        $customMessage = [
            'product_name.required' => 'product name field is required!'
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

            $slug = Str::slug($request['product_name'], '-');
            // $creator = Auth::user()->id;

            // product thambnail start
            $image = $request->file('product_thambnail');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(917,1000)->save('uploads/admin/product/product_thambnail/'.$name_gen);
            $save_url = 'uploads/admin/product/product_thambnail/'.$name_gen;
            // product thambnail end


            $insertProduct = Product::insertGetId([
                'product_name'=>$request['product_name'],
                'category_id'=>$request['category_id'],
                'subcategory_id'=>$request['subcategory_id'],
                'subsubcategory_id'=>$request['subsubcategory_id'],
                'brand_id'=>$request['brand_id'],
                'product_code'=>$request['product_code'],
                'product_qty'=>$request['product_qty'],
                'short_description'=>$request['short_description'],
                'product_thambnail' => $save_url,
                'best_seller'=>$request['best_seller'],
                'product_slug'=>$slug,
                // 'product_creator'=>$creator,
                'created_at'=>carbon::now(),
            ]);

            // Multiple Image Upload start
            $images = $request->file('multi_img');
            foreach ($images as $img) {
                $make_name= time().'.'.$img->getClientOriginalExtension();
                Image::make($img)->resize(917,1000)->save('uploads/admin/product/multi-image/'.$make_name);
                $uplodPath = 'uploads/admin/product/multi-image/'.$make_name;

                MultiImage::insert([
                    'product_id' => $insertProduct,
                    'product_slug' => $slug,
                    'photo_name' => $uplodPath,
                    'created_at' => Carbon::now(),
                ]);
            }
            // Multiple Image Upload end

             // product variant start
            $pv_item = count($request->pv_selling_price);

            if($pv_item != NULL){
                for ($i=0; $i <$pv_item ; $i++) {
                    $product_variant_loop = new ProductVariant();
                    $product_variant_loop->product_id = $insertProduct;
                    $product_variant_loop->pv_name = $request->pv_name[$i];
                    $product_variant_loop->pv_gram = $request->pv_gram[$i];
                    $product_variant_loop->color_id = $request->color_id[$i];
                    $product_variant_loop->pv_selling_price = $request->pv_selling_price[$i];
                    $product_variant_loop->pv_discount_price = $request->pv_discount_price[$i];
                    $product_variant_loop->pv_discount_percentage = $request->pv_discount_percentage[$i];
                    $product_variant_loop->pv_qty = $request->pv_qty[$i];
                    $product_variant_loop->product_slug = $slug;
                    $product_variant_loop->save();
                }
            }
            // product variant end



            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $insertProduct]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }
    }


    public function updateWebsiteProduct(Request $request, $id){

        try {
            $slug = Str::slug($request['product_name'], '-');
            // $creator = Auth::user()->id;

            $updateProduct = Product::where('product_status',1)->where('id',$id)->update([
                'product_name'=>$request['product_name'],
                'category_id'=>$request['category_id'],
                'subcategory_id'=>$request['subcategory_id'],
                'subsubcategory_id'=>$request['subsubcategory_id'],
                'brand_id'=>$request['brand_id'],
                'product_code'=>$request['product_code'],
                'product_qty'=>$request['product_qty'],
                'short_description'=>$request['short_description'],
                'best_seller'=>$request['best_seller'],
                'product_slug'=>$slug,
                // 'product_creator'=>$creator,
                'updated_at'=>Carbon::now(),
            ]);


            // Other Qualifications Start
            if($request->pv_selling_price == NULL){
                $notification=array(
                    'messege'=>'Enter Minimum One Data!',
                    'alert-type'=>'success',
                );
                return redirect()->back()->with($notification);
            }else{

                ProductVariant::where('product_id',$id)->delete();

                $pv_item = count($request->pv_selling_price);

                for ($i=0; $i <$pv_item ; $i++) {
                    $product_variant_loop = new ProductVariant();
                    $product_variant_loop->product_id = $id;
                    $product_variant_loop->pv_name = $request->pv_name[$i];
                    $product_variant_loop->pv_gram = $request->pv_gram[$i];
                    $product_variant_loop->color_id = $request->color_id[$i];
                    $product_variant_loop->pv_selling_price = $request->pv_selling_price[$i];
                    $product_variant_loop->pv_discount_price = $request->pv_discount_price[$i];
                    $product_variant_loop->pv_discount_percentage = $request->pv_discount_percentage[$i];
                    $product_variant_loop->pv_qty = $request->pv_qty[$i];
                    $product_variant_loop->product_slug = $slug;
                    $product_variant_loop->save();
                }
            }
            // Other Qualifications End


            return response()->json(['success' => 'true', 'status_code' => '200', 'data' => $updateProduct]);
        }
        catch (Exception $ex) {
            return response()->json(['success' => 'false', 'status_code' => '500', 'message' => $ex->getMessage(), 'error' => 'error']);
        }

    }

    public function deleteWebsiteProduct($id = null){

        try {
            Product::where('product_status',1)->where('id',$id)->update([
                'product_status'=>0
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
