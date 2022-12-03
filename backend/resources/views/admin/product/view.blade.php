@extends('layouts.admin')
@section('title')
    Product view
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Product View Information</h4>
                    <a href="{{ route('product') }}" class="all_link"><i class="mdi mdi-grid"></i> All Product</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <table class="table table-bordered dt-responsive nowrap">
                                <tr>
                                    <td>Product Name</td>
                                    <td>:</td>
                                    <td>{{ $data->product_name }}</td>
                                </tr>
                                <tr>
                                    <td>Category Name</td>
                                    <td>:</td>
                                    <td>{{ $data->category->category_name }}</td>
                                </tr>
                                <tr>
                                    <td>Sub Category Name</td>
                                    <td>:</td>
                                    <td>{{ $data->subCategory->subcategory_name }}</td>
                                </tr>
                                <tr>
                                    <td>Sub-Sub-Category Name</td>
                                    <td>:</td>
                                    <td>{{ $data->subSubCategory->subsubcategory_name }}</td>
                                </tr>
                                <tr>
                                    <td>Brand Name</td>
                                    <td>:</td>
                                    <td>{{ $data->brand->brand_name }}</td>
                                </tr>
                                <tr>
                                    <td>Product Code</td>
                                    <td>:</td>
                                    <td>{{ $data->product_code }}</td>
                                </tr>
                                <tr>
                                    <td>Product Quantity</td>
                                    <td>:</td>
                                    <td>{{ $data->product_qty }}</td>
                                </tr>
                                <tr>
                                    <td>Product Description</td>
                                    <td>:</td>
                                    <td>{{ Str::words($data->short_description,5) }}</td>
                                </tr>
                                <tr>
                                    <td>Product Thambnail</td>
                                    <td>:</td>
                                    <td>
                                        <img src="{{ asset($data->product_thambnail) }}" alt="" style="height: 60px; width:60px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Multi Image</td>
                                    <td>:</td>
                                    <td>
                                        @foreach ($multiImgs as $img)
                                            <img class="card-img-top" src="{{ asset($img->photo_name) }}" alt="Card image cap" style="height: 50px; width:50px;">
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Best Seller</td>
                                    <td>:</td>
                                    <td>
                                        @if ($data->best_seller == 1)
                                            <span style="color: #ffffff;background-color: green;border-radius: 3px;padding: 0px 4px;">Publish</span>
                                        @else
                                            <span style="color: #ffffff;background-color: red;border-radius: 3px;padding: 0px 4px;">Unpublish</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Created Date</td>
                                    <td>:</td>
                                    <td>{{ $data->created_at->format('Y-m-d') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-12">
                            <div class="product-variant-table-head mt-3 mb-3 text-center">
                                <h3>Product Variant</h3>
                            </div>
                            <table class="table table-bordered dt-responsive nowrap">
                                <tr>
                                    <td>Title</td>
                                    <td>:</td>
                                    <td>
                                        @foreach ($productVariants as $item)
                                            {{ $item->pv_name }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td>:</td>
                                    <td>
                                        @foreach ($productVariants as $item)
                                            {{ $item->pv_gram }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>:</td>
                                    <td>
                                        @foreach ($productVariants as $item)
                                            {{ $item->color_id }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Selling Price</td>
                                    <td>:</td>
                                    <td>
                                        @foreach ($productVariants as $item)
                                            {{ $item->pv_selling_price }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Discount Price</td>
                                    <td>:</td>
                                    <td>
                                        @foreach ($productVariants as $item)
                                            {{ $item->pv_discount_price }},
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Discount Percentage</td>
                                    <td>:</td>
                                    <td>
                                        @foreach ($productVariants as $item)
                                            {{ $item->pv_discount_percentage }},
                                        @endforeach
                                    </td>
                                </tr>

                                <tr>
                                    <td>Quantity</td>
                                    <td>:</td>
                                    <td>
                                        @foreach ($productVariants as $item)
                                            {{ $item->pv_qty }},
                                        @endforeach
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





