@extends('layouts.admin')
@section('title')
    Product
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-success">
                <div class="card-header">
                    <h4 class="user-registration"><i class="mdi mdi-account-circle"></i> All Product</h4>
                    <a href="{{ route('product.add') }}" class="all_link"><i class="mdi mdi-grid"></i> Add Product</a>
                </div>
                <div class="card-body">
                    <table id="alltableinfo" class="table table-bordered table-striped table-hover custom_table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->product_name }}</td>
                                    <td>
                                        <a class="view-icon" href="{{ url('admin/product/view/'.$product->product_slug) }}"><i class="bx bx-plus-medical"></i></a>
                                        <a class="edit-icon" href="{{ url('admin/product/edit/'.$product->id) }}"><i class="bx bx-edit"></i></a>

                                        <a class="delete-icon" id="softDelete" data-bs-toggle="modal" data-bs-target="#softDelModal" data-id="{{$product->id}}" href="#"><i class="bx bxs-trash"></i></a>
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
            <form method="post" action="{{ route('product.softdelete') }}">
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
@endsection





