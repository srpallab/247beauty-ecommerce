<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />

        @php
            $basic = App\Models\Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
        @endphp

        <link rel="shortcut icon" href="{{asset('uploads/basic/'.$basic->basic_favicon)}}">
        <link href="{{ asset('contents/admin') }}/assets/css/buttons.bootstrap4.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/admin') }}/assets/css/responsive.bootstrap4.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('contents/admin') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Datatable Css -->
        <link href="{{ asset('contents/admin') }}/assets/css/data-table-css/dataTables.bootstrap4.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <script src="{{ asset('contents/admin') }}/assets/libs/jquery/jquery.min.js"></script>
        <link href="{{ asset('contents/admin') }}/assets/css/toastr.css" id="theme" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/assets/css/lightbox.css">
    </head>
    <body data-sidebar="dark">
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <div class="navbar-brand-box">
                            <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('uploads/basic/'.$basic->basic_favicon)}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('uploads/basic/'.$basic->basic_logo)}}" alt="" height="19">
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset(Auth::user()->image) }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('admin_profile') }}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="{{ route('admin_password_change') }}"><i class="bx bx-lock-alt font-size-16 align-middle me-1"></i> <span key="t-profile">Change Password</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li>
                                <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i><span key="t-dashboards">Dashboards</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-cog"></i>
                                    <span key="t-ecommerce">General Settings</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('basic') }}" key="t-products">Basic</a></li>
                                    <li><a href="{{ route('social') }}" key="t-products">Social Media</a></li>
                                    <li><a href="{{ route('contactinformation') }}" key="t-products">Contact Information</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('banner') }}" class="waves-effect">
                                    <i class="bx bx-image"></i><span key="t-dashboards">Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('brand') }}" class="waves-effect">
                                    <i class="bx bx-card"></i><span key="t-dashboards">Brand</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('color') }}" class="waves-effect">
                                    <i class="bx bx-calendar"></i><span key="t-dashboards">Color</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-list-ol"></i>
                                    <span key="t-ecommerce">Add Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('category') }}" key="t-products">Category</a></li>
                                    <li><a href="{{ route('sub-category') }}" key="t-products">Sub Category</a></li>
                                    <li><a href="{{ route('sub-sub-category') }}" key="t-products">Sub Sub Category</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-list-ol"></i>
                                    <span key="t-ecommerce">Shipping Area</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('division') }}" key="t-products">Division</a></li>
                                    <li><a href="{{ route('district') }}" key="t-products">District</a></li>
                                    <li><a href="{{ route('state') }}" key="t-products">State</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('product') }}" class="waves-effect">
                                    <i class="bx bx-calendar"></i><span key="t-dashboards">Product</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('coupon') }}" class="waves-effect">
                                    <i class="bx bx-calendar"></i><span key="t-dashboards">Coupon</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="waves-effect">
                                    <i class="bx bx-power-off"></i><span key="t-dashboards">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form id="logout-form" method="POST" action="{{ url('logout') }}">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Projonmo Digital Limited.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Projonmo Digital Limited
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="rightbar-overlay"></div>
        <script src="{{ asset('contents/admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/js/app.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/js/custom.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/js/validate.min.js"></script>

        <!-- Required dataTables -->
        <script src="{{ asset('contents/admin') }}/assets/js/datatable/jquery.dataTables.min.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/js/datatable/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive DataTables -->
        <script src="{{ asset('contents/admin') }}/assets/js/datatable/dataTables.responsive.min.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/js/datatable/responsive.bootstrap4.min.js"></script>

        <script src="{{ asset('contents/admin') }}/assets/js/toastr.min.js"></script>
        <script>
            @if(Session::has('messege'))
                var type="{{Session::get('alert-type','info')}}"
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('messege') }}");
                        break;
                    case 'success':
                        toastr.success("{{ Session::get('messege') }}");
                        break;
                    case 'warning':
                        toastr.warning("{{ Session::get('messege') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('messege') }}");
                    break;
                }
            @endif
        </script>
    </body>
</html>
