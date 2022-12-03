@extends('layouts.admin')
@section('title')
    Product Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Product Update Information</h4>
                    <a href="{{ route('product') }}" class="all_link"><i class="mdi mdi-grid"></i> All Product</a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('product.update') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" class="form-control" value="{{ $product->id }}">
                        <input type="hidden" name="slug" class="form-control" value="{{ $product->product_slug }}">

                        <div class="row row-sm">
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name<span class="require_star">*</span></label>
                                    <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Category<span class="require_star">*</span></label>
                                    <select class="form-control" name="category_id">
                                        <option value="">-- Select Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' :'' }}>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Sub Category<span class="require_star">*</span></label>
                                    <select class="form-control" name="subcategory_id">
                                        <option value="{{ $product->id }}">{{ $product->subCategory->subcategory_name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Sub SubCategory<span class="require_star">*</span></label>
                                    <select class="form-control"  name="subsubcategory_id">
                                        <option value="{{ $product->id }}">{{ $product->subSubCategory->subsubcategory_name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Brand<span class="require_star">*</span></label>
                                    <select class="form-control" name="brand_id">
                                        <option value="">-- Select Brand --</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' :'' }}>{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Product Code</label>
                                    <input type="text" name="product_code" class="form-control" value="{{ $product->product_code }}">
                                </div>
                            </div>
                            <div class="col-sm-5 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Product Quantity<span class="require_star">*</span></label>
                                    <input type="number" min="1" name="product_qty" class="form-control" value="{{ $product->product_qty }}">
                                </div>
                            </div>
                            <div class="col-sm-5 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Product Description</label>
                                    <input type="text" name="short_description" class="form-control" value="{{ $product->short_description }}">
                                </div>
                            </div>
                            <div class="col-sm-2 mb-4">
                                <div class="form-group mt-2">
                                    <label class="form-control-label">Best Seller</label><br>
                                    <input type="checkbox" name="best_seller" class="form-check-input" value="1" {{ $product->best_seller == 1 ?'checked': '' }}>
                                </div>
                            </div>




                                <div class="product-variant-area add_item">
                                    <div class="product-varient-title text-center">
                                        <h3>Product Variant</h3>
                                    </div>
                                    <div class="col-sm-12 mb-2 add_item">
                                        @foreach($productVariants as $item)

                                            <hr>

                                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                                <div class="row">
                                                    <div class="col-sm-3 mb-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Title<span class="require_star">*</span></label>
                                                            <input type="text" name="pv_name[]" class="form-control" placeholder="Enter product name" value="{{ $item->pv_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mb-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Weight</label>
                                                            <input type="text" name="pv_gram[]" class="form-control" placeholder="Enter weight" value="{{ $item->pv_gram }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mb-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Color</label>
                                                            <select class="form-control" name="color_id[]">
                                                                <option value="0">-- No Color --</option>
                                                                @foreach($colors as $color)
                                                                    <option value="{{ $color->id }}" {{ $color->id == $item->color_id ? 'selected' :'' }}>{{ $color->color_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mb-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Selling Price<span class="require_star">*</span></label>
                                                            <input type="text" name="pv_selling_price[]" class="form-control" placeholder="0.00" value="{{ $item->pv_selling_price }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mb-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Discount Price</label>
                                                            <input type="text" name="pv_discount_price[]" class="form-control" placeholder="0.00" value="{{ $item->pv_discount_price }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mb-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Discount Percentage</label>
                                                            <input type="number" name="pv_discount_percentage[]" class="form-control" placeholder="0.00" value="{{ $item->pv_discount_percentage }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mb-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label">QTY<span class="require_star">*</span></label>
                                                            <input type="number" name="pv_qty[]" class="form-control" value="{{ $item->pv_qty }}" min="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3" style="padding-top:28px;padding-left: 0px;">
                                                        <span class="btn btn-success addeventmore"><i class="bx bx-plus-medical"></i></span>
                                                        <span class="btn btn-danger removeeventmore"><i class="bx bx-x"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                            <div class="col-sm-12 mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark registration-btn">Update Product</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('update-product-thambnail') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="old_img" value="{{ $product->product_thambnail }}">
                        <br>
                        <h4>Update Product Thambnail</h4>
                        <div class="row row-sm" style="margin-top:30px;">
                              <div class="col-md-3">
                                <div class="card">
                                  <img class="card-img-top" src="{{ asset($product->product_thambnail) }}" alt="Card image cap" style="height: 150px; width:150px;">
                                  <div class="card-body">
                                    <p class="card-text">
                                      <div class="form-group">
                                        <label class="form-control-label">Change Image<span class="tx-danger">*</span></label>
                                        <input class="form-control" type="file" name="product_thambnail" onchange="mainThambUrl(this)">
                                      </div>
                                      <img src="" id="mainThmb">
                                    </p>
                                  </div>
                                </div>
                              </div>
                        </div>

                        <div class="form-layout-footer">
                          <button type="submit" class="btn btn-info">Update Thambnail</button>
                        </div><!-- form-layout-footer -->
                      </form>

                    <form action="{{ route('update.product.multi.image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <h4>Update Product Multiple Image</h4>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="form-control-label">Product Multi Image</label>
                                <input type="file" class="form-control" name="multi_img[]" value="{{ old('multi_img') }}" multiple id="multiImg">
                            </div>
                            <div class="row" id="preview_img">

                            </div>
                        </div>

                        <div class="row mt-5">
                            @foreach ($multiImgs as $img)
                                <div class="col-md-3">
                                    <div class="card" >
                                    <img class="card-img-top" src="{{ asset($img->photo_name) }}" alt="Card image cap" style="height: 150px; width:150px;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                        <a href="{{ route('delete.product.multi.image',$img->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="fa fa-trash"></i></a>
                                        </h5>
                                        <p class="card-text">
                                        <div class="form-group">
                                            <label class="form-control-label">Change Image<span class="tx-danger">*</span></label>
                                            <input class="form-control" type="file" name="multiImg[{{ $img->id }}]" >
                                        </div>
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info">Update Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Variant  Start -->
    <section style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div style="visibility:hidden;">

                        <div class="whole_extra_item_add" id="whole_extra_item_add">
                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                <div class="mt-1">

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Title<span class="require_star">*</span></label>
                                                <input type="text" name="pv_name[]" class="form-control" placeholder="Enter product name" value="{{ $item->pv_name }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Weight</label>
                                                <input type="text" name="pv_gram[]" class="form-control" placeholder="Enter weight" value="{{ $item->pv_gram }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Color</label>
                                                <select class="form-control" name="color_id[]">
                                                    <option value="0">-- No Color --</option>
                                                    @foreach($colors as $color)
                                                        <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Selling Price<span class="require_star">*</span></label>
                                                <input type="text" name="pv_selling_price[]" class="form-control" placeholder="0.00" value="{{ $item->pv_selling_price }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Discount Price</label>
                                                <input type="text" name="pv_discount_price[]" class="form-control" placeholder="0.00" value="{{ $item->pv_discount_price }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Discount Percentage</label>
                                                <input type="number" name="pv_discount_percentage[]" class="form-control" placeholder="0.00" value="{{ $item->pv_discount_percentage }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">QTY<span class="require_star">*</span></label>
                                                <input type="number" name="pv_qty[]" class="form-control" value="{{ $item->pv_qty }}" min="1">
                                            </div>
                                        </div>
                                        <div class="col-sm-3" style="padding-top:28px;padding-left: 0px;">
                                            <span class="btn btn-success addeventmore"><i class="bx bx-plus-medical"></i></span>
                                            <span class="btn btn-danger removeeventmore"><i class="bx bx-x"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Variant End -->

    <!-- Product Variant Start -->
    <script type="text/javascript">
        $(document).ready(function(){
            var counter = 0;
            $(document).on("click",".addeventmore", function(){
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", ".removeeventmore", function(event){
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1
            });
        });
    </script>
    <!-- Product Variant End -->

    <!-- from validation start -->
    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    "product_name": {
                        required : true,
                    },
                    "category_id": {
                        required : true,
                    },
                    "subcategory_id": {
                        required : true,
                    },
                    "subsubcategory_id": {
                        required : true,
                    },
                    "brand_id": {
                        required : true,
                    },
                    "product_qty": {
                        required : true,
                    },
                    "pv_name[]": {
                        required : true,
                    },
                    "pv_selling_price[]": {
                        required : true,
                    },
                    "pv_qty[]": {
                        required : true,
                    },
                },
                messages :{

                },
                errorElement : 'span',
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
    <!-- from validation end -->

    <!-- category click for sub category show start -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function(){
                var category_id = $(this).val();
                if(category_id) {
                    $.ajax({
                        url: "{{  url('/admin/subcategory/ajax') }}/"+category_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                        var d =$('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
    <!-- category click for subcategory show end -->

    <!-- subcategory click for sub subcategory show start -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="subcategory_id"]').on('change', function(){
                var subcategory_id = $(this).val();
                if(subcategory_id) {
                    $.ajax({
                        url: "{{  url('/admin/subsubcategory/ajax') }}/"+subcategory_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                        var d =$('select[name="subsubcategory_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
    <!-- subcategory click for sub subcategory show end -->
@endsection





