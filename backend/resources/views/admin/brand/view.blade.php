@extends('layouts.admin')
@section('title')
    Brand view
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Brand View Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <table class="table table-bordered dt-responsive nowrap">
                                <tr>
                                    <td>Brand Name</td>
                                    <td>:</td>
                                    <td>{{$data->brand_name}}</td>
                                </tr>
                                <tr>
                                    <td>Brand Url</td>
                                    <td>:</td>
                                    <td>{{$data->brand_url}}</td>
                                </tr>
                                <tr>
                                    <td>Brand Image</td>
                                    <td>:</td>
                                    <td>
                                        @if($data->brand_image!='')
                                            <img src="{{asset('uploads/admin/brand/'.$data->brand_image)}}" alt="Brand" style="height: 60px; width:60px;"/>
                                        @else
                                            <img src="{{asset('uploads/no_image.jpg')}}" alt="Brand" style="height: 60px; width:60px;"/>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





