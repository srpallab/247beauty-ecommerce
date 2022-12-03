@extends('layouts.admin')
@section('title')
    Category view
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Category View Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered dt-responsive nowrap">
                                <tr>
                                    <td>Category Name</td>
                                    <td>:</td>
                                    <td>{{$data->category_name}}</td>
                                </tr>
                                <tr>
                                    <td>Category Image</td>
                                    <td>:</td>
                                    <td>
                                        <img src="{{asset('uploads/admin/category/'.$data->category_image)}}" alt="" style="height: 100px; width:150px;">
                                    </td>
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





