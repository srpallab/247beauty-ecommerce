@extends('layouts.admin')
@section('title')
    Contact Information
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="all_and_all">
                        <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Update Contact Information </h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('update_contactinformation') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bx-phone-outgoing"></i><span class="require_star">*</span></div>
                                    <input type="text" name="phone1" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_phone1 }}">
                                    <input type="hidden" name="id" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_id }}">
                                    <input type="hidden" name="slug" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_slug }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bx-phone-outgoing"></i></div>
                                    <input type="text" name="phone2" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_phone2 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bx-phone-outgoing"></i></div>
                                    <input type="text" name="phone3" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_phone3 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bx-phone-outgoing"></i></div>
                                    <input type="text" name="phone4" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_phone4 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bx-envelope"></i></div>
                                    <input type="text" name="email1" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_email1 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bx-envelope"></i></div>
                                    <input type="text" name="email2" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_email2 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bx-envelope"></i></div>
                                    <input type="text" name="email3" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_email3 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bx-envelope"></i></div>
                                    <input type="text" name="email4" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_email4 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxs-home-circle"></i></div>
                                    <input type="text" name="add1" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_add1 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxs-home-circle"></i></div>
                                    <input type="text" name="add2" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_add2 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxs-home-circle"></i></div>
                                    <input type="text" name="add3" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_add3 }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxs-home-circle"></i></div>
                                    <input type="text" name="add4" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->ci_add4 }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-dark waves-effect waves-light">Update</button>
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
                    "phone1": {
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
