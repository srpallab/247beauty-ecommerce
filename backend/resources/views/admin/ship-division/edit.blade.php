@extends('layouts.admin')
@section('title')
    Division Edit
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-success">
            <div class="card-header">
                <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Division Update Information </h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('division.update') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" class="form-control" value="{{ $data->id }}">
                    <input type="hidden" name="slug" class="form-control" value="{{ $data->division_slug }}">

                    <div class="row row-sm">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 mb-2">
                            <div class="form-group">
                                <label class="form-control-label">Division Name<span class="require_star">*</span></label>
                                <input type="text" name="division_name" class="form-control" value="{{ $data->division_name }}">
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-12 mt-4">
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark registration-btn">Update Division</button>
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





