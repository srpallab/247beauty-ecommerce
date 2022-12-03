<div class="">
    <img class="card-img-top" src="{{ asset(Auth::user()->image) }}" height="220" width="220" alt="User Profile">
    <ul class="list-group list-group-flush mt-4">
        <a href="{{ route('admin_profile') }}" class="btn btn-primary btn-sm btn-block" >Home</a>
        <a href="{{ route('profile.image') }}" class="btn btn-primary btn-sm btn-block mt-1">Update Image</a>
        <a href="{{ route('admin_password_change') }}" class="btn btn-primary btn-sm btn-block mt-1">Update Password</a>
        <a href="{{ route('logout') }}" class="btn btn-danger btn-sm btn-block mt-1" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Log Out</a>
    </ul>
</div>