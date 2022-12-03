@extends('layouts.admin')
@section('title')
    Coupon Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Coupon Update Information</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('coupon.update') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" class="form-control" value="{{ $data->id }}">
                        <input type="hidden" name="slug" class="form-control" value="{{ $data->coupon_slug }}">

                        <div class="row row-sm">
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Coupon Name<span class="require_star">*</span></label>
                                    <input type="text" name="coupon_name" class="form-control" value="{{ $data->coupon_name }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Coupon Discount<span class="require_star">*</span></label>
                                    <input type="text" name="coupon_discount" class="form-control" value="{{ $data->coupon_discount }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Coupon Validity<span class="require_star">*</span></label>
                                    <input type="date" name="coupon_validity" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $data->coupon_validity }}">
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark registration-btn">Update Coupon</button>
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
                    "coupon_name": {
                        required : true,
                    },
                    "coupon_discount": {
                        required : true,
                    },
                    "coupon_validity": {
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





