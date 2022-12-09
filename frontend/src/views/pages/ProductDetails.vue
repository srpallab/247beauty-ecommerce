<script setup>
	import { ref } from "vue";

	// Import Swiper Vue.js components
	import { Swiper, SwiperSlide } from "swiper/vue";

	// Import Swiper styles
	import "swiper/css";

	import "swiper/css/pagination";
	import "swiper/css/navigation";
	
	// import required modules
	import { Pagination, Autoplay, Navigation } from "swiper";

	const modules = ref([Pagination, Autoplay, Navigation]);

</script>

<template>
	<div>
		
		 <!-- ==================== Product Details Area start ==================== -->
		 <section class="details-area section-padding details-bg mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="owl-carousel product-details-active">
                            <div data-dot="<img src='/src/assets/images/best-seller/3.avif'>" class="single-product-details">
                                <div class="product-details-head">
                                    <img src="/src/assets/images/best-seller/3.avif" alt="">
                                </div>
                            </div>
                            <div data-dot="<img src='/src/assets/images/best-seller/4.avif'>" class="single-product-details">
                                <div class="product-details-head">
                                    <img src="assets/images/best-seller/4.avif" alt="">
                                </div>
                            </div>
                            <div data-dot="<img src='/src/assets/images/best-seller/5.avif'>" class="single-product-details">
                                <div class="product-details-head">
                                    <img src="assets/images/best-seller/5.avif" alt="">
                                </div>
                            </div>
                            <div data-dot="<img src='/src/assets/images/best-seller/6.avif'>" class="single-product-details">
                                <div class="product-details-head">
                                    <img src="assets/images/best-seller/6.avif" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="details-right-content">
                            <div class="details-head">
                                <h2>I Am Magic Velvety Matte Foundation</h2>
                            </div>
                            <div class="details-rating-review mt-3">
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-review">(10 Reviews)</span>
                            </div>
                            <div class="details-availability-stock mt-3 mb-3">
                                <span>Availability : </span>
                                <span class="details-stock"> In Stock</span>
                            </div>
                            <div class="details-product-specification mt-4 mb-4">
								<h6>Product Specification</h6>
								<table class="specification-table">
									<tr>
										<td>ddd</td>
										<td>ddd</td>
										<td>ddd</td>
										<td>ddd</td>
									</tr>
									<tr>
										<td>ddd</td>
										<td>ddd</td>
										<td>ddd</td>
										<td>ddd</td>
									</tr>
								</table>
                            </div>

                            <div class="details-cart-social mb-3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="details-cart-price">
                                            <span class="non-del">$22.00</span>
                                            <span class="del"><del>$25.00</del></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-select-color mt-3">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label style="color: #000;">Select Color</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Green</option>
                                                <option>Read</option>
                                                <option>Black</option>
                                                <option>White</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label style="color: #000;">Size</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label style="color: #000;">QTY</label>
                                            <div class="details-quantity-number">
												<span><input type="number" value="1" min="0"></span>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="details-quantity-add-to-cart mt-3">
                                <div class="row">
                                    <div class="col-sm-3 pr-0 mr-2">
                                        <div class="details-add-to-cart">
                                            <a href="#"><i class="fa-solid fa-cart-shopping"></i> Buy Now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 pl-0">
                                        <div class="details-add-to-cart">
                                            <a href="#"><i class="fa-solid fa-cart-shopping"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

					<div class="col-xl-3">
						<div class="product-details-right-side">
							<div class="single-product-details-right-side-content">
								<div class="spdrsc-icon">
									<i class="fa-solid fa-leaf"></i>
								</div>
								<div class="spdrsc-text">
									<div class="spdrsc-product-name">
										<span>Free Delevery</span>
									</div>
									<div class="spdrsc-order-over">
										<span>For Order Over $50</span>
									</div>
									<div class="spdrsc-standard">
										<span>Standard : $50 / $100</span>
									</div>
								</div>
							</div>
							<div class="single-product-details-right-side-content mt-4">
								<div class="spdrsc-icon">
									<i class="fa-solid fa-arrows-rotate"></i>
								</div>
								<div class="spdrsc-text">
									<div class="spdrsc-product-name">
										<span>3 Days Return</span>
									</div>
									<div class="spdrsc-order-over">
										<span>If Goods Have Problems</span>
									</div>
								</div>
							</div>
							<div class="single-product-details-right-side-content mt-4">
								<div class="spdrsc-icon">
									<i class="fa-solid fa-credit-card"></i>
								</div>
								<div class="spdrsc-text">
									<div class="spdrsc-product-name">
										<span>Secure Payment</span>
									</div>
									<div class="spdrsc-order-over">
										<span>100% Secure Payment</span>
									</div>
								</div>
							</div>
							<div class="single-product-details-right-side-content mt-4">
								<div class="spdrsc-icon">
									<i class="fa-solid fa-car"></i>
								</div>
								<div class="spdrsc-text">
									<div class="spdrsc-product-name">
										<span>9 AM - 11 PM Support</span>
									</div>
									<div class="spdrsc-order-over">
										<span>Dedicated Support</span>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </section>
        <!-- ==================== Product Details Area End ==================== -->

        <!-- ==================== Review Rating Area Start ==================== -->
        <section class="mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link review-comments-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">DESCRIPTION</a>
                        <a class="nav-link review-comments-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">REVIEW</a>
                        <a class="nav-link review-comments-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Comments</a>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <p>I AM MAGIC Velvety Matte Foundation is a flawless foundation and we think it's the best full coverage foundation! The I AM MAGIC formula equates to lightweight, lasting coverage for all day wearability. It has a velvety finish that never looks cakey. From Sudan to Marisol, our 42 expertly formulated shades are globally-inspired by ALL skin tones, from the deepest dark to the fairest fair.</p>
                        </div>
                        
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="h5">Zumon Hossain</div>
                            <div class="details-rating-review mt-3">
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="details-rating"><i class="fa-solid fa-star"></i></span>
                                <span class="calender-month"><i class="fa fa-calendar"></i> 6 month ago</span>
                            </div>
                            <div class="review-description">
                                <p>Nice Product</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <h5>Facebook Comments</h5>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================== Review Rating  Area End ==================== -->

		<!-- ==================== Related Product Area Start ==================== -->
		<section class="mt-4">
			<div class="best-sellers-arer">
				<!-- main heading start -->
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="all-heading">
								<h3>Related Product</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- main heading end -->

				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<swiper
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
							</swiper>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ==================== Related Product Area Area End ==================== -->

		<!-- ==================== Sponsor Logo Area Start ==================== -->
		<div class="sponsor-logo-area mt-4 mb-4">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<swiper
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
						</swiper>
					</div>
				</div>
			</div>
		</div>
		<!-- ==================== Sponsor Logo Area End ==================== -->
	
	</div>
</template>