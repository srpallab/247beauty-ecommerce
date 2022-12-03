@extends('layouts.admin')
@section('title')
    Social Media
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="all_and_all">
                        <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Update Social Media Information </h4>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('update_social') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-facebook"></i><span class="require_star">*</span></div>
                                    <input type="text" name="facebook" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_facebook }}">
                                    <input type="hidden" name="id" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_id }}">
                                    <input type="hidden" name="slug" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_slug }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-twitter"></i></div>
                                    <input type="text" name="twitter" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_twitter }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-linkedin"></i></div>
                                    <input type="text" name="linkedin" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_linkedin }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-google"></i></div>
                                    <input type="text" name="google" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_google }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-pinterest"></i></div>
                                    <input type="text" name="pinterest" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_pinterest }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-youtube"></i></div>
                                    <input type="text" name="youtube" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_youtube }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-vimeo"></i></div>
                                    <input type="text" name="vimeo" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_vimeo }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-instagram"></i></div>
                                    <input type="text" name="instagram" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_instagram }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-whatsapp"></i></div>
                                    <input type="text" name="whatsapp" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_whatsapp }}">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text all-icons"><i class="bx bxl-skype"></i></div>
                                    <input type="text" name="skype" class="form-control" id="inlineFormInputGroupUsername" value="{{ $data->sm_skype }}">
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
                    "facebook": {
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
