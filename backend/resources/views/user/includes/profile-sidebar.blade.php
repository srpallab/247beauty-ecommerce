<div class="card">
    <div class="profile-img">
        <img class="profile-image card-img-top" src="{{ asset(Auth::user()->image) }}" alt="Card image cap">
    </div>
    <ul class="list-group list-group-flush">
      <a style="background-color: #d7537b;color:#fff" href="{{ route('user.dashboard') }}" class="btn btn-sm btn-block">Home</a>
      <a style="background-color: #d7537b;color:#fff" href="{{ route('user.image') }}" class="btn btn-sm btn-block">Update Image</a>
      <a style="background-color: #d7537b;color:#fff" href="{{ route('update-password') }}" class="btn btn-sm btn-block">Update Password</a>
      <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block"> Log Out</a>
    </ul>
</div>
