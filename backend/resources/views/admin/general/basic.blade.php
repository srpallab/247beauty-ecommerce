@extends('layouts.admin')
@section('title')
    Basic Information
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="all_and_all">
                        <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Update Basic Information </h4>
                        <a href="{{url('admin/general/basic')}}" class="all_link"><i class="mdi mdi-grid"></i> All Basic</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('update_basic') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Title <span class="require_star">*</span></label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="title" value="{{ $data->basic_title }}">
                                <input class="form-control" type="hidden" name="id" value="{{ $data->basic_id }}">
                                <input class="form-control" type="hidden" name="slug" value="{{ $data->basic_slug }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Subtitle</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="subtitle" value="{{ $data->basic_subtitle }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Logo <span class="require_star">*</span></label>
                            <div class="col-sm-3">
                                <input type="file" class="" name="logo">
                            </div>
                            <div class="col-sm-2">
                                @if($data->basic_logo!='')
                                    <img class="img-thumbnail" style="width:150px; height:50px" src="{{asset('uploads/basic/'.$data->basic_logo)}}" alt="logo"/>
                                @else
                                    <img class="img-thumbnail" style="width:150px; height:50px" src="{{asset('uploads/no_image.jpg')}}" alt="logo"/>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Favicon <span class="require_star">*</span></label>
                            <div class="col-sm-3">
                                <input type="file" class="" name="favicon">
                            </div>
                            <div class="col-sm-2">
                                @if($data->basic_favicon!='')
                                    <img class="img-thumbnail" style="width:50px; height:50px" src="{{asset('uploads/basic/'.$data->basic_favicon)}}" alt="favicon"/>
                                @else
                                    <img class="img-thumbnail" style="width:50px; height:50px" src="{{asset('uploads/no_image.jpg')}}" alt="favicon"/>
                                @endif
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
                    "title": {
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
