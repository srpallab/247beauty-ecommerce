@extends('layouts.admin')
@section('title')
    Brand
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> Add Brand </h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('brand.insert') }}" id="myForm" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-sm">
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Brand Name<span class="require_star">*</span></label>
                                    <input type="text" name="brand_name" class="form-control" value="{{ old('brand_name') }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Brand Discount Amount (%)<span class="require_star">*</span></label>
                                    <input type="text" name="brand_discount_amount" class="form-control" value="{{ old('brand_discount_amount') }}">
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group">
                                    <label class="form-control-label">Brand Image</label>
                                    <input type="file" name="brand_image" class="form-control" onchange="mainThambUrl(this)">

                                    <img src="" id="mainThmb">
                                </div>
                            </div>
                            <div class="col-sm-2 mb-4">
                                <div class="form-group mt-2">
                                    <label class="form-control-label">Top Brand</label><br>
                                    <input type="checkbox" name="top_brand" class="form-check-input" value="1">
                                </div>
                            </div>
                            <div class="col-sm-2 mb-4">
                                <div class="form-group mt-2">
                                    <label class="form-control-label">Featuren Brand</label><br>
                                    <input type="checkbox" name="featuren_brand" class="form-check-input" value="1">
                                </div>
                            </div>
                            <div class="col-sm-2 mb-2">
                                <div class="form-group mt-2">
                                    <label class="form-control-label">Brand Serial</label>
                                    <input type="number" name="brand_serial" class="form-control" value="{{ old('brand_serial') }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-dark registration-btn">Save Brand</button>
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
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> All Brand</h4>
                </div>
                <div class="card-body">
                    <table id="alltableinfo" class="table table-bordered table-striped table-hover custom_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Discount Amount (%)</th>
                                <th>Image</th>
                                <th>Top Brand</th>
                                <th>Featured Brand</th>
                                <th>Brand Serial</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brand as $item)
                                <tr>
                                    <td>{{ $item->brand_name }}</td>
                                    <td>{{ $item->brand_discount_amount }}</td>
                                    <td>
                                        @if($item->brand_image!='')
                                            <img src="{{asset('uploads/admin/brand/'.$item->brand_image)}}" alt="Brand" style="height: 60px; width:60px;"/>
                                        @else
                                            <img src="{{asset('uploads/no_image.jpg')}}" alt="Brand" style="height: 60px; width:60px;"/>
                                        @endif
                                    </td>
                                    <td>{{ $item->top_brand }}</td>
                                    <td>{{ $item->featuren_brand }}</td>
                                    <td>{{ $item->brand_serial }}</td>
                                    <td>
                                        <a class="view-icon" href="{{ url('admin/brand/view/'.$item->brand_slug) }}"><i class="bx bx-plus-medical"></i></a>
                                        <a class="edit-icon" href="{{ url('admin/brand/edit/'.$item->brand_slug) }}"><i class="bx bx-edit"></i></a>

                                        <a class="delete-icon" id="softDelete" data-bs-toggle="modal" data-bs-target="#softDelModal" data-id="{{$item->id}}" href="#"><i class="bx bxs-trash"></i></a>
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
            <form method="post" action="{{ route('brand.softdelete') }}">
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
                    "brand_name": {
                        required : true,
                    },
                    "brand_discount_amount": {
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





