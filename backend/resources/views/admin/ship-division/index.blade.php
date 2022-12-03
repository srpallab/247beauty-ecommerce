@extends('layouts.admin')
@section('title')
    Division
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Add Division </h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('division.insert') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-sm">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Division Name<span class="require_star">*</span></label>
                                    <input type="text" name="division_name" class="form-control" placeholder="Enter division name" value="{{ old('division_name') }}">
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-12 mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark registration-btn">Save Division</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> All division</h4>
                </div>
                <div class="card-body">
                    <table id="alltableinfo" class="table table-bordered table-striped table-hover custom_table">
                        <thead>
                            <tr>
                                <th>Division Name</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($divisions as $division)
                                <tr>
                                    <td>{{ $division->division_name }}</td>
                                    <td>
                                        <a class="view-icon" href="{{ url('admin/division/view/'.$division->division_slug) }}"><i class="bx bx-plus-medical"></i></a>
                                        <a class="edit-icon" href="{{ url('admin/division/edit/'.$division->division_slug) }}"><i class="bx bx-edit"></i></a>

                                        <a class="delete-icon" id="softDelete" data-bs-toggle="modal" data-bs-target="#softDelModal" data-id="{{$division->id}}" href="#"><i class="bx bxs-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Softdelete modal -->
    <div id="softDelModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ route('division.softdelete') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel"><i class="fab fa-gg-circle"></i>Confirm Message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete?
                        <input type="hidden" id="modal_id" name="modal_id">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-md btn-danger waves-effect waves-light">Confirm</button>
                        <button type="button" class="btn btn-md btn-dark waves-effect" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    "division_name": {
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





