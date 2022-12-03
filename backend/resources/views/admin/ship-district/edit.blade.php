@extends('layouts.admin')
@section('title')
    District Edit
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-success">
            <div class="card-header">
                <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Update District </h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('district.update') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" class="form-control" value="{{ $district->id }}">
                    <input type="hidden" name="slug" class="form-control" value="{{ $district->district_slug }}">

                    <div class="row row-sm">
                        <div class="col-sm-6 mb-2">
                            <div class="form-group">
                                <label class="form-control-label">Division Name<span class="require_star">*</span></label>
                                <select class="form-control select2-show-search" name="division_id">
                                    <option value="">-- Select Division Name --</option>
                                    @foreach($divisions as $division)
                                    <option value="{{ $division->id }}" {{ $division->id == $district->division_id ? 'selected': '' }}>{{ $division->division_name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="form-group">
                                <label class="form-control-label">District Name<span class="require_star">*</span></label>
                                <input type="text" name="district_name" class="form-control" value="{{ $district->district_name }}">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-4">
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark registration-btn">Update District</button>
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
                "division_id": {
                    required : true,
                },
                "district_name": {
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





