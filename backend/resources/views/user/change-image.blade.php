@extends('layouts.website')

@section('content')
<div class="body-content mt-4 mb-4">
	<div class="container">
    <div class="sign-in-page">
        <div class="row">
            <div class="col-md-3 ">
                @include('user.includes.profile-sidebar')
            </div>
            <div class="col-md-9 mt-1">
              <div class="card">
                <h3 class="text-center mt-3"> <span class="text-warning">Hi..!</span> <strong style="color: #d7537b">{{ Auth::user()->name }}</strong> Update Your profile</h3>
                    <div class="card-body">
                        <form action="{{ route('update.image') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ Auth::user()->image }}">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>

                            <div class="form-group">
                                <button type="submit" class="btn" style="background-color:#d7537b;color:#ffffff">Upload</button>
                            </div>
                        </form>
                    </div>
              </div>
            </div>
          </div>
	</div>
</div>
</div>
@endsection
