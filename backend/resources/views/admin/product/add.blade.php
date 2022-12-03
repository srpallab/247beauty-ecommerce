@extends('layouts.admin')
@section('title')
    Product
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Add Product </h4>
                    <a href="{{ route('product') }}" class="all_link"><i class="mdi mdi-grid"></i> All Product</a>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('product.insert') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-sm">
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name<span class="require_star">*</span></label>
                                    <input type="text" name="product_name" class="form-control" placeholder="Enter product name" value="{{ old('product_name') }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Category<span class="require_star">*</span></label>
                                    <select class="form-control" name="category_id">
                                        <option value="">-- Select Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Sub Category<span class="require_star">*</span></label>
                                    <select class="form-control" name="subcategory_id">
                                        <option value="">-- Select SubCategory --</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Sub SubCategory<span class="require_star">*</span></label>
                                    <select class="form-control"  name="subsubcategory_id">
                                        <option value="">-- Select Sub SubCategory --</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Brand<span class="require_star">*</span></label>
                                    <select class="form-control" name="brand_id">
                                        <option value="">-- Select Brand --</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Product Code</label>
                                    <input type="text" name="product_code" class="form-control" placeholder="Enter product code" value="{{ old('product_code') }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Product Quantity</label>
                                    <input type="number" min="1" name="product_qty" class="form-control" value="1">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Product Description</label>
                                    <input type="text" name="short_description" class="form-control" placeholder="Enter product description" value="{{ old('short_description') }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="form-control-label">Product Thambnail<span class="require_star">*</span></label>
                                    <input type="file" name="product_thambnail" class="form-control" placeholder="Enter product thambnail" onchange="mainThambUrl(this)">
                                    <img src="" id="mainThmb">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="form-control-label">Product Multi Image<span class="require_star">*</span></label>
                                    <input type="file" class="form-control" name="multi_img[]" value="{{ old('multi_img') }}" multiple id="multiImg">
                                </div>
                                <div class="row" id="preview_img">

                                </div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <div class="form-group">
                                    <label class="form-control-label">Best Seller</label><br>
                                    <input type="checkbox" name="best_seller" class="form-check-input" value="1">
                                </div>
                            </div>



                            <div class="product-variant-area add_item">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="product-varient-title text-center">
                                                <h3>Product Variant</h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Title<span class="require_star">*</span></label>
                                                <input type="text" name="pv_name[]" class="form-control" placeholder="title" value="{{ old('pv_name') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Weight</label>
                                                <input type="text" name="pv_gram[]" class="form-control" placeholder="gm" value="{{ old('pv_gram') }}">
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
                                                <input type="text" name="pv_selling_price[]" class="form-control" placeholder="0.00" value="{{ old('pv_selling_price') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Discount Price</label>
                                                <input type="text" name="pv_discount_price[]" class="form-control" placeholder="0.00" value="{{ old('pv_discount_price') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Discount Percentage</label>
                                                <input type="number" name="pv_discount_percentage[]" class="form-control" placeholder="0.00" value="{{ old('pv_discount_percentage') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">QTY<span class="require_star">*</span></label>
                                                <input type="number" name="pv_qty[]" class="form-control" value="1" min="1">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="btn btn-success addeventmore" style="margin-top:27px"><i class="bx bx-plus-medical"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-12 mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark registration-btn">Save Product</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Multi Form Start -->
    <section style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div style="visibility:hidden;">
                        <div class="whole_extra_item_add" id="whole_extra_item_add">
                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                <div class="mt-1">
                                    <div class="row">
                                        <hr>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Title<span class="require_star">*</span></label>
                                                <input type="text" name="pv_name[]" class="form-control" placeholder="title" value="{{ old('pv_name') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Weight</label>
                                                <input type="text" name="pv_gram[]" class="form-control" placeholder="gm" value="{{ old('pv_gram') }}">
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
                                                <input type="text" name="pv_selling_price[]" class="form-control" placeholder="0.00" value="{{ old('pv_selling_price') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Discount Price</label>
                                                <input type="text" name="pv_discount_price[]" class="form-control" placeholder="0.00" value="{{ old('pv_discount_price') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Discount Percentage</label>
                                                <input type="number" name="pv_discount_percentage[]" class="form-control" placeholder="0.00" value="{{ old('pv_discount_percentage') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="form-group">
                                                <label class="form-control-label">QTY<span class="require_star">*</span></label>
                                                <input type="number" name="pv_qty[]" class="form-control" value="1" min="1">
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4" style="padding-left: 0px;margin-top:27px">
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
    <!-- Multi Form Start -->

    <!-- Multi Form Start -->
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
    <!-- Multi Form Start -->

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
                    "product_thambnail": {
                        required : true,
                    },
                    "multi_img[]": {
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


