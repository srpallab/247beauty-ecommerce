@extends('layouts.website')

@section('content')
    <div class="body-content mt-4 mb-4">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-3">
                        @include('user.includes.profile-sidebar')
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <h3 class="text-center mt-3"> <span class="text-warning">Hi..!</span> <strong style="color: #d7537b">{{ Auth::user()->name }}</strong> Update Your profile</h3>
                            <div class="card-body">
                                <form action="{{ route('update-profile') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ Auth::user()->phone }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn" style="background-color:#d7537b;color:#ffffff">Submit</button>
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
