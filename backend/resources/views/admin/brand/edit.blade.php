@extends('layouts.admin')
@section('title')
    Brand Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Brand Update Information</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('brand.update') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" class="form-control" value="{{ $data->id }}">
                        <input type="hidden" name="slug" class="form-control" value="{{ $data->brand_slug }}">

                        <div class="row row-sm">
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Brand Name<span class="require_star">*</span></label>
                                    <input type="text" name="brand_name" class="form-control" value="{{ $data->brand_name }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Brand Discount Amount (%)<span class="require_star">*</span></label>
                                    <input type="text" name="brand_discount_amount" class="form-control" value="{{ $data->brand_discount_amount }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Brand Image</label>
                                    <input type="file" name="brand_image" class="form-control" onchange="mainThambUrl(this)">

                                    <img class="card-img-top" src="{{asset('uploads/admin/brand/'.$data->brand_image)}}" alt="Card image cap" style="height: 100px; width:150px;">

                                    <img src="" id="mainThmb">
                                </div>
                            </div>
                            <div class="col-sm-2 mb-4">
                                <div class="form-group mt-2">
                                    <label class="form-control-label">Top Brand</label><br>
                                    <input type="checkbox" name="top_brand" class="form-check-input" value="1" {{ $data->top_brand == 1 ? 'checked': '' }}>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-4">
                                <div class="form-group mt-2">
                                    <label class="form-control-label">Featuren Brand</label><br>
                                    <input type="checkbox" name="featuren_brand" class="form-check-input" value="1" {{ $data->featuren_brand == 1 ? 'checked': '' }}>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-2">
                                <div class="form-group mt-2">
                                    <label class="form-control-label">Brand Serial</label>
                                    <input type="number" name="brand_serial" class="form-control" value="{{ $data->brand_serial }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark registration-btn">Update Brand</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    "brand_name": {
                        required : true,
                    },
                    "brand_discount_amount": {
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
@endsection





