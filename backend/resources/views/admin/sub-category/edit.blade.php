@extends('layouts.admin')
@section('title')
    Sub Category Edit
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i>Sub Category Update Information</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('sub-category.update') }}" id="myForm" class="form-horizontal" enctype="multipart/form-subcategory">
                        @csrf

                        <input type="hidden" name="id" class="form-control" value="{{ $subcategory->id }}">
                        <input type="hidden" name="slug" class="form-control" value="{{ $subcategory->category_slug }}">

                        <div class="row row-sm">
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Category Name<span class="require_star">*</span></label>
                                    <select class="form-control" name="category_id">
                                        <option value="">-- Select Category Name --</option>
                                        @foreach($category as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $subcategory->category_id ? 'selected': '' }}> {{ $cat->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Category Name<span class="require_star">*</span></label>
                                    <input type="text" name="subcategory_name" class="form-control" value="{{ $subcategory->subcategory_name }}">
                                </div>
                            </div>
                            <div class="col-sm-12 mt-4">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark registration-btn">Update Sub Category</button>
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
                    "subcategory_name": {
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





