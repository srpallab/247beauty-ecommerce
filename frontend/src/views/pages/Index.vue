<script>
	// import { ref, reactive,inject, onMounted } from "vue";

	// // Import Swiper Vue.js components
	// import { Swiper, SwiperSlide } from "swiper/vue";

	// // Import Swiper styles
	// import "swiper/css";

	// import "swiper/css/pagination";
	// import "swiper/css/navigation";

	// // import required modules
	// import { Pagination, Autoplay, Navigation } from "swiper";

	import 'vue3-carousel/dist/carousel.css';
	import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';

	import axios from 'axios';


	export default {
		name: 'Index',
		components: {
			Carousel,
			Slide,
			Pagination,
			Navigation,
		},
		data(){
			return{
				// CategoryList:[],
				// BrandList:[],
				// ProductList: [],
			}
		},

		created(){
			alert('ookk');
			// testMethod();

		},

		methode(){
			// test(){
				// this.axios.get(api).then((response) => {
				// 	console.log(response.data)
				// })
			// }

			// testMethod = () =>{
			// 	this.axios.post('https://jsonplaceholder.typicode.com/posts')
			// 	.then(function (response) {
			// 		alert ('okk');
			// 	})
			// 	.catch(function (error) {
			// 		alert(nnoo);
			// 	});
			// }
		},
	}

</script>

<template>
	<div>
		<!-- ================= Banner Area Start ================ -->
		<section>
			<div class="banner-area">
				<!-- <swiper
					:spaceBetween="30"
					:pagination="{
						clickable: true,
					}"
					:autoplay="{
						delay: 2500,
						disableOnInteraction: false,
					}"
					:navigation="true"
					:modules="modules"
					class="mySwiper"
				>
					<swiper-slide><a href="#"><img class="slider-image" src="/src/assets/images/banner/1.avif" alt=""></a></swiper-slide>
					<swiper-slide><a href="#"><img class="slider-image" src="/src/assets/images/banner/2.avif" alt=""></a></swiper-slide>
					<swiper-slide><a href="#"><img class="slider-image" src="/src/assets/images/banner/3.avif" alt=""></a></swiper-slide>
				</swiper> -->



				<carousel :items-to-show="1">
					<slide v-for="slide in 5" :key="slide">
					<a href="#"><img class="slider-image" src="/src/assets/images/banner/1.avif" alt=""></a>
					<!-- <a href="#"><img class="slider-image" src="/src/assets/images/banner/2.avif" alt=""></a>
					<a href="#"><img class="slider-image" src="/src/assets/images/banner/3.avif" alt=""></a> -->
					</slide>

					<template #addons>
					<navigation />
					<pagination />
					</template>
				</carousel>

			</div>
		</section>
		<!-- ================= Banner Area End ================ -->

		<!-- ================= Promotional Banner Area Start ================ -->
		<section class="mt-4">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="promotional-banner">
							<!-- <swiper :rewind="true" :navigation="true" :modules="modules" class="mySwiper">
								<swiper-slide><a href="#"><img class="slider-image" src="/src/assets/images/promotional-banner/1.avif" alt=""></a></swiper-slide>
								<swiper-slide><a href="#"><img class="slider-image" src="/src/assets/images/promotional-banner/2.avif" alt=""></a></swiper-slide>
							</swiper> -->


							<carousel :items-to-show="1">
								<slide v-for="slide in 5" :key="slide">
								<a href="#"><img class="slider-image" src="/src/assets/images/promotional-banner/1.avif" alt=""></a>
								</slide>

								<template #addons>
								<navigation />
								<pagination />
								</template>
							</carousel>
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
									style="background-image: url('/src/assets/images/top-brand/1.avif')">
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
									style="background-image: url('/src/assets/images/top-brand/2.avif')">
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
									style="background-image: url('/src/assets/images/top-brand/3.avif')">
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
									style="background-image: url('/src/assets/images/top-brand/4.avif')">
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
							<!-- <swiper :rewind="true" :navigation="true" :modules="modules" class="mySwiper">
								<swiper-slide><a href="#"><img class="slider-image" src="/src/assets/images/promotional-banner/3.avif" alt=""></a></swiper-slide>
								<swiper-slide><a href="#"><img class="slider-image" src="/src/assets/images/promotional-banner/4.avif" alt=""></a></swiper-slide>
							</swiper> -->


							<carousel :items-to-show="1">
								<slide v-for="slide in 5" :key="slide">
								<a href="#"><img class="slider-image" src="/src/assets/images/promotional-banner/3.avif" alt=""></a>
								</slide>

								<template #addons>
								<navigation />
								<pagination />
								</template>
							</carousel>
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
							<!-- <swiper
								:slidesPerView="4"
								:spaceBetween="30"
								:slidesPerGroup="1"
								:loop="true"
								:loopFillGroupWithBlank="true"
								:navigation="true"
								:modules="modules"
								class="mySwiper"
							>
								<swiper-slide>
									<div class="single-best-sellers">
										<div class="best-seller-content">
											<div class="best-seller-image">
												<img class="" src="/src/assets/images/best-seller/1.avif" alt="">
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
								</swiper-slide>
								<swiper-slide>
									<div class="single-best-sellers">
										<div class="best-seller-content">
											<div class="best-seller-image">
												<img class="" src="/src/assets/images/best-seller/1.avif" alt="">
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
								</swiper-slide>
								<swiper-slide>
									<div class="single-best-sellers">
										<div class="best-seller-content">
											<div class="best-seller-image">
												<img class="" src="/src/assets/images/best-seller/1.avif" alt="">
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
								</swiper-slide>
								<swiper-slide>
									<div class="single-best-sellers">
										<div class="best-seller-content">
											<div class="best-seller-image">
												<img class="" src="/src/assets/images/best-seller/1.avif" alt="">
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
								</swiper-slide>
							</swiper> -->



											<carousel :items-to-show="4">
												<slide v-for="slide in 15" :key="slide">
												<div class="single-best-sellers">
														<div class="best-seller-content">
															<div class="best-seller-image">
																<img class="" src="/src/assets/images/best-seller/1.avif" alt="">
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
												</slide>

								<template #addons>
								<navigation />
								<pagination />
								</template>
							</carousel>


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
										<img src="/src/assets/images/featured-brands/1.avif" alt="">
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
										<img src="/src/assets/images/featured-brands/2.avif" alt="">
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
										<img src="/src/assets/images/featured-brands/3.avif" alt="">
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
										<img src="/src/assets/images/featured-brands/4.avif" alt="">
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
										<img src="/src/assets/images/featured-brands/5.avif" alt="">
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
										<img src="/src/assets/images/featured-brands/6.avif" alt="">
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
										<img src="/src/assets/images/featured-brands/7.avif" alt="">
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
										<img src="/src/assets/images/featured-brands/8.avif" alt="">
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
							<!-- <swiper
								:slidesPerView="6"
								:spaceBetween="30"
								:slidesPerGroup="1"
								:loop="true"
								:loopFillGroupWithBlank="true"
								:navigation="true"
								:modules="modules"
								class="mySwiper"
							>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="/src/assets/images/sponsor-logo/sponsor-1.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="/src/assets/images/sponsor-logo/sponsor-2.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="/src/assets/images/sponsor-logo/sponsor-3.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="/src/assets/images/sponsor-logo/sponsor-4.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="/src/assets/images/sponsor-logo/sponsor-5.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="/src/assets/images/sponsor-logo/sponsor-1.jpg" alt="">
									</div>
								</swiper-slide>
							</swiper> -->




							<carousel :items-to-show="7">
								<slide v-for="slide in 15" :key="slide">
									<div class="single-sponsor-logo">
										<img src="/src/assets/images/sponsor-logo/sponsor-1.jpg" alt="">
									</div>
								</slide>

								<template #addons>
								<navigation />
								<pagination />
								</template>
							</carousel>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ==================== Sponsor Logo Area End ==================== -->
	</div>
</template>