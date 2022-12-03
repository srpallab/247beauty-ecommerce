<script setup>
	import { ref } from "vue";

	import { Swiper, SwiperSlide } from "swiper/vue";

	// Import Swiper styles
	import "swiper/css";

	import "swiper/css/pagination";
	import "swiper/css/navigation";

	// import required modules
	import { Pagination, Navigation } from "swiper";

	const modules = ref([Pagination]);
</script>

<template>
	<div>
		<!-- ================= Banner Area Start ================ -->
		<section>
			<div class="banner-area">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100 slider-image" src="src/assets/images/banner/1.avif" alt="First slide">
							<div class="slider-content">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 slider-image" src="src/assets/images/banner/2.avif"
								alt="Second slide">
							<div class="slider-content">
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 slider-image" src="src/assets/images/banner/3.avif" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span aria-hidden="true"><i class="fa-solid fa-chevron-left banner-icon"></i></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span aria-hidden="true"><i class="fa-solid fa-chevron-right banner-icon"></i></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>
		<!-- ================= Banner Area End ================ -->

		<!-- ================= Promotional Banner Area Start ================ -->
		<section class="mt-4">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="promotional-banner">
							<div id="carouselExampleIndicatorsprpmotionalbanner" class="carousel slide"
								data-ride="carousel">

								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100 slider-image"
											src="src/assets/images/promotional-banner/1.avif" alt="First slide"
											height="230px">
										<div class="slider-content">
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100 slider-image"
											src="src/assets/images/promotional-banner/2.avif" alt="Second slide"
											height="230px">
										<div class="slider-content">
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicatorsprpmotionalbanner"
									role="button" data-slide="prev">
									<span aria-hidden="true"><i
											class="fa-solid fa-chevron-left promotional-banner-icon"></i></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicatorsprpmotionalbanner"
									role="button" data-slide="next">
									<span aria-hidden="true"><i
											class="fa-solid fa-chevron-right promotional-banner-icon"></i></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ================= Promotional Banner Area End ================ -->

		<!-- ================= Top Brand Area Start ================ -->
		<section>
			<div class="top-brand-area pt-4">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="all-heading">
								<h3>TOP BRANDS</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6 mb-4">
							<a href="#">
								<div class="top-brand-body-content"
									style="background-image: url('src/assets/images/top-brand/1.avif');">
									<div class="top-brand-text">
										<div class="top-brand-text-discount">
											<span>Upto 35% Off</span>
										</div>
										<div class="top-brand-text-description">
											<span>Get Spectacu-Lips With Maybelline!</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-6 col-lg-6 mb-4">
							<a href="#">
								<div class="top-brand-body-content"
									style="background-image: url('src/assets/images/top-brand/2.avif');">
									<div class="top-brand-text">
										<div class="top-brand-text-discount">
											<span>Upto 35% Off</span>
										</div>
										<div class="top-brand-text-description">
											<span>Get Spectacu-Lips With Maybelline!</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-6 col-lg-6 mb-4">
							<a href="#">
								<div class="top-brand-body-content"
									style="background-image: url('src/assets/images/top-brand/3.avif');">
									<div class="top-brand-text">
										<div class="top-brand-text-discount">
											<span>Upto 35% Off</span>
										</div>
										<div class="top-brand-text-description">
											<span>Get Spectacu-Lips With Maybelline!</span>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xl-6 col-lg-6 mb-4">
							<a href="#">
								<div class="top-brand-body-content"
									style="background-image: url('src/assets/images/top-brand/4.avif');">
									<div class="top-brand-text">
										<div class="top-brand-text-discount">
											<span>Upto 35% Off</span>
										</div>
										<div class="top-brand-text-description">
											<span>Get Spectacu-Lips With Maybelline!</span>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ================= Top Brand Area End ================ -->

		<!-- ================= Promotional Banner Two Area Start ================ -->
		<section class="mt-2">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="promotional-banner-two">
							<div id="carouselExampleIndicatorsprpmotionalbannertwo" class="carousel slide"
								data-ride="carousel">

								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100 slider-image"
											src="src/assets/images/promotional-banner/3.avif" alt="First slide"
											height="100px">
										<div class="slider-content">
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100 slider-image"
											src="src/assets/images/promotional-banner/4.avif" alt="Second slide"
											height="100px">
										<div class="slider-content">
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicatorsprpmotionalbannertwo"
									role="button" data-slide="prev">
									<span aria-hidden="true"><i
											class="fa-solid fa-chevron-left promotional-banner-two-icon"></i></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicatorsprpmotionalbannertwo"
									role="button" data-slide="next">
									<span aria-hidden="true"><i
											class="fa-solid fa-chevron-right promotional-banner-two-icon"></i></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ================= Promotional Banner Two Area End ================ -->

		<!-- ==================== Best Seller Area Start ==================== -->
		<section class="mt-4">
			<div class="best-sellers-arer">
				<!-- main heading start -->
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="all-heading">
								<h3>Best Seller</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- main heading end -->

				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="owl-carousel best-sellers-active">
								<div class="single-best-sellers">
									<div class="best-seller-content">
										<div class="best-seller-image">
											<img src="src/assets/images/best-seller/1.avif" alt="">
										</div>
										<div class="best-seller-text">
											<div class="best-seller-title">
												<span>Lakme Lumi Skin Cream</span>
											</div>
											<div class="best-seller-kg">
												<span>30gm</span>
											</div>
											<div class="best-seller-rating">
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span>(50)</span>
											</div>
											<div class="best-seller-price">
												<span class="best-seller-main-price">$500</span>
												<span class="best-seller-discount-price">$700</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-best-sellers">
									<div class="best-seller-content">
										<div class="best-seller-image">
											<img src="src/assets/images/best-seller/2.avif" alt="">
										</div>
										<div class="best-seller-text">
											<div class="best-seller-title">
												<span>Lakme Lumi Skin Cream</span>
											</div>
											<div class="best-seller-kg">
												<span>30gm</span>
											</div>
											<div class="best-seller-rating">
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span>(50)</span>
											</div>
											<div class="best-seller-price">
												<span class="best-seller-main-price">$500</span>
												<span class="best-seller-discount-price">$700</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-best-sellers">
									<div class="best-seller-content">
										<div class="best-seller-image">
											<img src="src/assets/images/best-seller/3.avif" alt="">
										</div>
										<div class="best-seller-text">
											<div class="best-seller-title">
												<span>Lakme Lumi Skin Cream</span>
											</div>
											<div class="best-seller-kg">
												<span>30gm</span>
											</div>
											<div class="best-seller-rating">
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span>(50)</span>
											</div>
											<div class="best-seller-price">
												<span class="best-seller-main-price">$500</span>
												<span class="best-seller-discount-price">$700</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-best-sellers">
									<div class="best-seller-content">
										<div class="best-seller-image">
											<img src="src/assets/images/best-seller/4.avif" alt="">
										</div>
										<div class="best-seller-text">
											<div class="best-seller-title">
												<span>Lakme Lumi Skin Cream</span>
											</div>
											<div class="best-seller-kg">
												<span>30gm</span>
											</div>
											<div class="best-seller-rating">
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span>(50)</span>
											</div>
											<div class="best-seller-price">
												<span class="best-seller-main-price">$500</span>
												<span class="best-seller-discount-price">$700</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-best-sellers">
									<div class="best-seller-content">
										<div class="best-seller-image">
											<img src="src/assets/images/best-seller/5.avif" alt="">
										</div>
										<div class="best-seller-text">
											<div class="best-seller-title">
												<span>Lakme Lumi Skin Cream</span>
											</div>
											<div class="best-seller-kg">
												<span>30gm</span>
											</div>
											<div class="best-seller-rating">
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span>(50)</span>
											</div>
											<div class="best-seller-price">
												<span class="best-seller-main-price">$500</span>
												<span class="best-seller-discount-price">$700</span>
											</div>
										</div>
									</div>
								</div>
								<div class="single-best-sellers">
									<div class="best-seller-content">
										<div class="best-seller-image">
											<img src="src/assets/images/best-seller/6.avif" alt="">
										</div>
										<div class="best-seller-text">
											<div class="best-seller-title">
												<span>Lakme Lumi Skin Cream</span>
											</div>
											<div class="best-seller-kg">
												<span>30gm</span>
											</div>
											<div class="best-seller-rating">
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span><i class="fa-solid fa-star"></i></span>
												<span>(50)</span>
											</div>
											<div class="best-seller-price">
												<span class="best-seller-main-price">$500</span>
												<span class="best-seller-discount-price">$700</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ==================== Best Seller Area Area End ==================== -->

		<!-- ==================== Featured Brand Area Area End ==================== -->
		<section class="mt-4">
			<div class="featured-brand-area">
				<!-- main heading start -->
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="all-heading">
								<h3>FEATURED BRANDS</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- main heading end -->
				<div class="container">
					<div class="row">
						<div class="col-xl-3 mb-4">
							<div class="single-featured-brands">
								<a href="#">
									<div class="single-featured-brands-image">
										<img src="src/assets/images/featured-brands/1.avif" alt="">
									</div>
									<div class="single-featured-brands-text">
										<div class="single-featured-brands-text-discount">
											<span>Upto 30% Off</span>
										</div>
										<div class="single-featured-brands-text-description">
											<span>Pour, Press, Swipe!</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 mb-4">
							<div class="single-featured-brands">
								<a href="#">
									<div class="single-featured-brands-image">
										<img src="src/assets/images/featured-brands/2.avif" alt="">
									</div>
									<div class="single-featured-brands-text">
										<div class="single-featured-brands-text-discount">
											<span>Upto 30% Off</span>
										</div>
										<div class="single-featured-brands-text-description">
											<span>Pour, Press, Swipe!</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 mb-4">
							<div class="single-featured-brands">
								<a href="#">
									<div class="single-featured-brands-image">
										<img src="src/assets/images/featured-brands/3.avif" alt="">
									</div>
									<div class="single-featured-brands-text">
										<div class="single-featured-brands-text-discount">
											<span>Upto 30% Off</span>
										</div>
										<div class="single-featured-brands-text-description">
											<span>Pour, Press, Swipe!</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 mb-4">
							<div class="single-featured-brands">
								<a href="#">
									<div class="single-featured-brands-image">
										<img src="src/assets/images/featured-brands/4.avif" alt="">
									</div>
									<div class="single-featured-brands-text">
										<div class="single-featured-brands-text-discount">
											<span>Upto 30% Off</span>
										</div>
										<div class="single-featured-brands-text-description">
											<span>Pour, Press, Swipe!</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 mb-4">
							<div class="single-featured-brands">
								<a href="#">
									<div class="single-featured-brands-image">
										<img src="src/assets/images/featured-brands/5.avif" alt="">
									</div>
									<div class="single-featured-brands-text">
										<div class="single-featured-brands-text-discount">
											<span>Upto 30% Off</span>
										</div>
										<div class="single-featured-brands-text-description">
											<span>Pour, Press, Swipe!</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 mb-4">
							<div class="single-featured-brands">
								<a href="#">
									<div class="single-featured-brands-image">
										<img src="src/assets/images/featured-brands/6.avif" alt="">
									</div>
									<div class="single-featured-brands-text">
										<div class="single-featured-brands-text-discount">
											<span>Upto 30% Off</span>
										</div>
										<div class="single-featured-brands-text-description">
											<span>Pour, Press, Swipe!</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 mb-4">
							<div class="single-featured-brands">
								<a href="#">
									<div class="single-featured-brands-image">
										<img src="src/assets/images/featured-brands/7.avif" alt="">
									</div>
									<div class="single-featured-brands-text">
										<div class="single-featured-brands-text-discount">
											<span>Upto 30% Off</span>
										</div>
										<div class="single-featured-brands-text-description">
											<span>Pour, Press, Swipe!</span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xl-3 mb-4">
							<div class="single-featured-brands">
								<a href="#">
									<div class="single-featured-brands-image">
										<img src="src/assets/images/featured-brands/8.avif" alt="">
									</div>
									<div class="single-featured-brands-text">
										<div class="single-featured-brands-text-discount">
											<span>Upto 30% Off</span>
										</div>
										<div class="single-featured-brands-text-description">
											<span>Pour, Press, Swipe!</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ==================== Featured Brand Area Area End ==================== -->

		<!-- ==================== Sponsor Logo Area Start ==================== -->
		<section class="mt-4 mb-4">
			<div class="sponsor-logo-area section-padding">
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="owl-carousel sponsor-logo-active">
								<div class="single-sponsor-logo">
									<img src="src/assets/images/sponsor-logo/sponsor-1.jpg" alt="">
								</div>
								<div class="single-sponsor-logo">
									<img src="src/assets/images/sponsor-logo/sponsor-2.jpg" alt="">
								</div>
								<div class="single-sponsor-logo">
									<img src="src/assets/images/sponsor-logo/sponsor-3.jpg" alt="">
								</div>
								<div class="single-sponsor-logo">
									<img src="src/assets/images/sponsor-logo/sponsor-4.jpg" alt="">
								</div>
								<div class="single-sponsor-logo">
									<img src="src/assets/images/sponsor-logo/sponsor-5.jpg" alt="">
								</div>
								<div class="single-sponsor-logo">
									<img src="src/assets/images/sponsor-logo/sponsor-6.jpg" alt="">
								</div>
								<div class="single-sponsor-logo">
									<img src="src/assets/images/sponsor-logo/sponsor-7.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ==================== Sponsor Logo Area End ==================== -->
	</div>
</template>