@extends('layouts.admin')
@section('title')
    State Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Division Update Information </h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('state.update') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" class="form-control" value="{{ $state->id }}">
                        <input type="hidden" name="slug" class="form-control" value="{{ $state->division_slug }}">

                        <div class="row row-sm">
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Division Name<span class="require_star">*</span></label>
                                    <select class="form-control select2-show-search" name="division_id">
                                        <option value="">-- Select Division Name --</option>
                                        @foreach($divisions as $division)
                                            <option value="{{ $division->id }}" {{ $division->id == $state->division_id ? 'selected': '' }}>{{ $division->division_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">District Name<span class="require_star">*</span></label>
                                    <select class="form-control select2-show-search" name="district_id">
                                        <option value="">-- Select District Name --</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">State Name<span class="require_star">*</span></label>
                                    <input type="text" name="state_name" class="form-control" value="{{ $state->state_name }}">
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark registration-btn">Update State</button>
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
                    "district_id": {
                        required : true,
                    },
                    "state_name": {
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="division_id"]').on('change', function(){
                var division_id = $(this).val();
                if(division_id) {
                    $.ajax({
                        url: "{{  url('/admin/district/ajax') }}/"+division_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {

                            $('select[name="district_id"]').empty();

                            $.each(data, function(key, value){
                                $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection





