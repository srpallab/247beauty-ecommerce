<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>247beauty</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('contents/website') }}/assets/images/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/fontawesome.all.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/meanmenu.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/nice-select.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/slick.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/responsive.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/others-page.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/default.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/style.css">
    </head>
    <body>
		<!-- ================= Header Area Start ================ -->
		<header>
			<div class="header-area">
				<!-- ================= Header Top Start ================ -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <div class="header-top-left">
                                    <div class="left-message">
                                        <a href="#">BEAUTY BONANZA Get Your Daily Dose Of Amazing Deals </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="header-top-right">
                                    <ul>
                                        <li>
                                            <a href="#" title="Store & Events">
                                                <span class="header-top-right-icon"><i class="fa-solid fa-location-dot"></i></span>
                                                <span class="header-top-right-text">Store & Events</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="Help Us">
                                                <span class="header-top-right-icon"><i class="fa-regular fa-circle-question"></i></span>
                                                <span class="header-top-right-text">Help</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================= Header Top End ================ -->

				<!-- ================= Header Middle Start ================ -->
                <div class="header-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2">
                                <div class="header-middle-logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('contents/website') }}/assets/images/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 d-flex align-items-center">
                                <div class="header-middle-category-menu">
                                    <div class="header-middle-main-menu">
										<nav>
											<ul>
												<li><a href="#">Categories</a></li>
												<li class="header-middle-static"><a href="#">Brand</a>
													<div class="header-middle-mega-menu header-middle-mega-full">
														<ul>
															<li class="header-middle-mega-title"><a href="#">Popular</a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/1.webp" alt="" width="100%"></a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/2.webp" alt="" width="100%"></a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/3.webp" alt="" width="100%"></a></li>
														</ul>
														<ul>
															<li class="header-middle-mega-title"><a href="#">Luxe</a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/6.webp" alt="" width="100%"></a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/7.webp" alt="" width="100%"></a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/8.webp" alt="" width="100%"></a></li>
														</ul>
														<ul>
															<li class="header-middle-mega-title"><a href="#">Only At Nykaa</a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/3.webp" alt="" width="100%"></a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/4.webp" alt="" width="100%"></a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/5.webp" alt="" width="100%"></a></li>
														</ul>
														<ul>
															<li class="header-middle-mega-title"><a href="#">New Launches</a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/8.webp" alt="" width="100%"></a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/1.webp" alt="" width="100%"></a></li>
															<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/popular/2.webp" alt="" width="100%"></a></li>
														</ul>
													</div>
												</li>
											</ul>
										</nav>
									</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-flex align-items-center">
                                <div class="header-middle-search">
									<form action="">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></div>
											</div>
											<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search on 247beauty">
										</div>
									</form>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 d-flex align-items-center">
                                <div class="header-middle-account">
                                    <ul>
                                        @auth
                                            <li>
                                                <a href="{{ route('user.dashboard') }}">
                                                    <span class="header-middle-account-icon-account"><i class="fa-regular fa-user"></i></span>
                                                    <span class="header-middle-account-text">Profile</span>
                                                </a>
                                            </li>
                                        @else
                                        <li>
                                            <a href="{{ url('login') }}">
                                                <span class="header-middle-account-icon-account"><i class="fa-regular fa-user"></i></span>
                                                <span class="header-middle-account-text">Account</span>
                                            </a>
                                        </li>
                                        @endauth
                                        <li>
                                            <a href="#">
                                                <span class="header-middle-account-icon-shopping">
                                                    <i class="fa-sharp fa-solid fa-bag-shopping"></i>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================= Header Middle End ================ -->

				<!-- ================= Header Bottom Start ================ -->
				<div class="header-bottom-area">
					<div class="container header-bottom-pos">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 header-bottom-static">
								<div class="header-bottom-main-menu">
									<nav>
										<ul>
											<li class="header-bottom-static"><a href="#">Makeup</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
											<li class="header-bottom-static"><a href="#">Hair</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
											<li class="header-bottom-static"><a href="#">Appliances</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
											<li class="header-bottom-static"><a href="#">Bath & Body</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
											<li class="header-bottom-static"><a href="#">Natural</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
											<li class="header-bottom-static"><a href="#">Mom & Baby</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
											<li class="header-bottom-static"><a href="#">Health & Wellness</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
											<li class="header-bottom-static"><a href="#">Men</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
											<li class="header-bottom-static"><a href="#">Pop Ups</a>
												<div class="header-bottom-mega-menu header-bottom-mega-full">
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Face</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Eyes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Lips</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Tools & Brushes</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Top Brands</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
													<ul>
														<li class="header-bottom-mega-title"><a href="#">Quick Links</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
														<li><a href="#">Full width</a></li>
													</ul>
												</div>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ================= Header Bottom End ================ -->
			</div>
		</header>
		<!-- ================= Header Area End ================ -->

        @yield('content')

		<!-- ==================== Footer Area Start ==================== -->
		<footer class="footer-area footer-bg">

			<!-- footer top start -->
			<section class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-5">
							<div class="footer-list-item">
								<div class="footer-title">
									<h3>Contact us</h3>
								</div>
								<div class="footer-list">
									<ul>
										<li><span class="list-icon"><i class="fas fa-map-marker-alt"></i></span>Mohammadpur, Dhaka Bangladesh</li>
										<li><a href="#"><span class="list-icon"><i class="fas fa-phone-volume"></i></span>888 9344 6000 / 888 1234 6789</a></li>
										<li><a href="#"><span class="list-icon"><i class="far fa-envelope"></i></span>contact@gmail.com</a></li>
										<li><span class="list-icon"><i class="fas fa-crosshairs"></i></span>7 Days a week from 10-00 am to 6-00 pm</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-lg-8 col-md-7">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="footer-list-item">
										<div class="footer-title">
											<h3>Information</h3>
										</div>
										<div class="footer-list">
											<ul>
												<li><a href="#">About Us</a></li>
												<li><a href="#">FAQ</a></li>
												<li><a href="#">Warranty And Services</a></li>
												<li><a href="#">Support 24/7 page</a></li>
												<li><a href="#">Blog</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="footer-list-item">
										<div class="footer-title">
											<h3>Product Support</h3>
										</div>
										<div class="footer-list">
											<ul>
												<li><a href="#">Brands</a></li>
												<li><a href="#">Gift Certificates</a></li>
												<li><a href="#">Affiliates</a></li>
												<li><a href="#">Specials</a></li>
												<li><a href="#">FAQs</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 d-none d-lg-block">
									<div class="footer-list-item">
										<div class="footer-title">
											<h3>Services</h3>
										</div>
										<div class="footer-list">
											<ul>
												<li><a href="#">Contact Us</a></li>
												<li><a href="#">Returns</a></li>
												<li><a href="#">Support</a></li>
												<li><a href="#">Site Map</a></li>
												<li><a href="#">Customer Service</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- footer top end -->

			<!-- footer middle start -->
			<section class="footer-middle d-flex align-items-center">
				<div class="footer-middle-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-5 col-md-6">
							<div class="follow">
								<div class="footer-social-title d-none d-xl-block">
									<h3>Follow us by</h3>
								</div>
								<div class="footer-social">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google"></i></a></li>
										<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-7 col-lg-7 col-md-6">
							<div class="newsletter">
								<div class="footer-social-title d-none d-xl-block">
									<h3>Sign Up for Newsletter</h3>
								</div>
								<form>
									<div class="footer-subscribe">
										<input type="text" placeholder="Your email address...">
										<a href="#">Subscribe</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- footer middle end -->

			<!-- footer bottom start -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="footer-copy">
								<p>247beauty © 2022 Developed by Projonmo Digital Limited</p>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="payment-cart">
								<ul>
									<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/payment/1.webp" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/payment/2.jpeg" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/payment/3.jpeg" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/payment/4.png" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('contents/website') }}/assets/images/payment/5.jpeg" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer bottom end -->
		</footer>
		<!-- ==================== Footer Area End ==================== -->






		<!-- all js here -->
        <script src="{{ asset('contents/website') }}/assets/js/vendor/jquery-3.2.1.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/popper.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/one-page-nav-min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/slick.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/jquery.meanmenu.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/ajax-form.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/wow.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/nice-select.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/jquery.scrollUp.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/plugins.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/main.js"></script>
    </body>
</html>
