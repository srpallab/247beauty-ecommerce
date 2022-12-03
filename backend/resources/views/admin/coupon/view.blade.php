@extends('layouts.admin')
@section('title')
    Coupon view
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Coupon View Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered dt-responsive nowrap">
                                <tr>
                                    <td>Coupon Name</td>
                                    <td>:</td>
                                    <td>{{$data->coupon_name}}</td>
                                </tr>
                                <tr>
                                    <td>Coupon Discount</td>
                                    <td>:</td>
                                    <td>{{$data->coupon_discount}}</td>
                                </tr>
                                <tr>
                                    <td>Coupon Validaty Time</td>
                                    <td>:</td>
                                    <td>{{$data->coupon_validity}}</td>
                                </tr>
                                <tr>
                                    <td>Created Date</td>
                                    <td>:</td>
                                    <td>{{ $data->created_at->format('Y-m-d') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





