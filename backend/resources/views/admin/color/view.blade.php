@extends('layouts.admin')
@section('title')
    Color view
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Color View Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered dt-responsive nowrap">
                                <tr>
                                    <td>Color Name</td>
                                    <td>:</td>
                                    <td>{{$data->color_name}}</td>
                                </tr>
                                <tr>
                                    <td>Color Code</td>
                                    <td>:</td>
                                    <td>{{$data->color_code}}</td>
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





