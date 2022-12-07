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
		

         <!-- ==================== Product Store Page Area start ==================== -->
		<section class="mt-4">
            <div class="shop-page-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="shop-page-left-side">
                                <div class="shop-page-left-head">
                                    <h5>CATEGORY</h5>
                                </div>
                                <div class="shop-page-left-list">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-page-left-side mt-4">
                                <div class="shop-page-left-head">
                                    <h5>Brand</h5>
                                </div>
                                <div class="shop-page-left-list">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">ddddd</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link shop-page-tab-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="icon fa fa-th-large"></i> Grid</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link shop-page-tab-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="icon fa fa-th-list"></i> List</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row mt-3">
                                        <div class="col-sm-3 mb-5">
                                            <div class="single-shop-product">
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/1.avif" alt="">
                                                </div>
                                                <div class="shop-content text-center">
                                                    <div class="shop-name">
                                                        <a href="#">Minis</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="product-main-price">$5000</span>
                                                        <span class="product-discount-price"><del>$1000</del></span>
                                                    </div>
                                                    <div class="shop-cart-list mt-2">
                                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#"><i class="icon fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-5">
                                            <div class="single-shop-product">
                                                <div class="shop-offer-product">
                                                    <span>NEW</span>
                                                </div>
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/2.avif" alt="">
                                                </div>
                                                <div class="shop-content text-center">
                                                    <div class="shop-name">
                                                        <a href="#">Eyeshadow</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="product-main-price">$5000</span>
                                                        <span class="product-discount-price"><del>$1000</del></span>
                                                    </div>
                                                    <div class="shop-cart-list mt-2">
                                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#"><i class="icon fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-5">
                                            <div class="single-shop-product">
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/3.avif" alt="">
                                                </div>
                                                <div class="shop-content text-center">
                                                    <div class="shop-name">
                                                        <a href="#">Eyeshadow</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="product-main-price">$5000</span>
                                                        <span class="product-discount-price"><del>$1000</del></span>
                                                    </div>
                                                    <div class="shop-cart-list mt-2">
                                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#"><i class="icon fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-5">
                                            <div class="single-shop-product">
                                                <div class="shop-offer-product">
                                                    <span>NEW</span>
                                                </div>
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/4.avif" alt="">
                                                </div>
                                                <div class="shop-content text-center">
                                                    <div class="shop-name">
                                                        <a href="#">Eyeshadow</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="product-main-price">$5000</span>
                                                        <span class="product-discount-price"><del>$1000</del></span>
                                                    </div>
                                                    <div class="shop-cart-list mt-2">
                                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#"><i class="icon fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-5">
                                            <div class="single-shop-product">
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/5.avif" alt="">
                                                </div>
                                                <div class="shop-content text-center">
                                                    <div class="shop-name">
                                                        <a href="#">Eyeshadow</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="product-main-price">$5000</span>
                                                        <span class="product-discount-price"><del>$1000</del></span>
                                                    </div>
                                                    <div class="shop-cart-list mt-2">
                                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#"><i class="icon fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-5">
                                            <div class="single-shop-product">
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/6.avif" alt="">
                                                </div>
                                                <div class="shop-content text-center">
                                                    <div class="shop-name">
                                                        <a href="#">Gifts & Sets</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="product-main-price">$5000</span>
                                                        <span class="product-discount-price"><del>$1000</del></span>
                                                    </div>
                                                    <div class="shop-cart-list mt-2">
                                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#"><i class="icon fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-5">
                                            <div class="single-shop-product">
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/7.avif" alt="">
                                                </div>
                                                <div class="shop-content text-center">
                                                    <div class="shop-name">
                                                        <a href="#">Eyeshadow</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="product-main-price">$5000</span>
                                                        <span class="product-discount-price"><del>$1000</del></span>
                                                    </div>
                                                    <div class="shop-cart-list mt-2">
                                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#"><i class="icon fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-5">
                                            <div class="single-shop-product">
                                                <div class="shop-offer-product">
                                                    <span>NEW</span>
                                                </div>
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/8.avif" alt="">
                                                </div>
                                                <div class="shop-content text-center">
                                                    <div class="shop-name">
                                                        <a href="#">Eyeshadow</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="product-main-price">$5000</span>
                                                        <span class="product-discount-price"><del>$1000</del></span>
                                                    </div>
                                                    <div class="shop-cart-list mt-2">
                                                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#"><i class="icon fa fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row mt-3">
                                        <div class="col-sm-3 mb-4">
                                            <div class="single-shop-product">
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/9.avif" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 mb-4">
                                            <div class="shop-content">
                                                <div class="shop-name">
                                                    <a class="m-0" href="#">Eyeshadow</a>
                                                </div>
                                                <div class="product-rating">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span class="product-main-price">$5000</span>
                                                    <span class="product-discount-price"><del>$1000</del></span>
                                                </div>
                                                <div class="shop-list-description">
                                                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                                                </div>
                                                <div class="shop-cart-list-two mt-2">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="icon fa fa-heart"></i></a>
                                                </div>
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="single-shop-product">
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/1.avif" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 mb-4">
                                            <div class="shop-content">
                                                <div class="shop-name">
                                                    <a class="m-0" href="#">Eyeshadow</a>
                                                </div>
                                                <div class="product-rating">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span class="product-main-price">$5000</span>
                                                    <span class="product-discount-price"><del>$1000</del></span>
                                                </div>
                                                <div class="shop-list-description">
                                                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                                                </div>
                                                <div class="shop-cart-list-two mt-2">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="icon fa fa-heart"></i></a>
                                                </div>
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="single-shop-product">
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/2.avif" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 mb-4">
                                            <div class="shop-content">
                                                <div class="shop-name">
                                                    <a class="m-0" href="#">Eyeshadow</a>
                                                </div>
                                                <div class="product-rating">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span class="product-main-price">$5000</span>
                                                    <span class="product-discount-price"><del>$1000</del></span>
                                                </div>
                                                <div class="shop-list-description">
                                                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                                                </div>
                                                <div class="shop-cart-list-two mt-2">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="icon fa fa-heart"></i></a>
                                                </div>
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="single-shop-product">
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/3.avif" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 mb-4">
                                            <div class="shop-content">
                                                <div class="shop-name">
                                                    <a class="m-0" href="#">Eyeshadow</a>
                                                </div>
                                                <div class="product-rating">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span class="product-main-price">$5000</span>
                                                    <span class="product-discount-price"><del>$1000</del></span>
                                                </div>
                                                <div class="shop-list-description">
                                                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                                                </div>
                                                <div class="shop-cart-list-two mt-2">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="icon fa fa-heart"></i></a>
                                                </div>
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="single-shop-product">
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/4.avif" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 mb-4">
                                            <div class="shop-content">
                                                <div class="shop-name">
                                                    <a class="m-0" href="#">Eyeshadow</a>
                                                </div>
                                                <div class="product-rating">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span class="product-main-price">$5000</span>
                                                    <span class="product-discount-price"><del>$1000</del></span>
                                                </div>
                                                <div class="shop-list-description">
                                                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                                                </div>
                                                <div class="shop-cart-list-two mt-2">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="icon fa fa-heart"></i></a>
                                                </div>
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="single-shop-product">
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/5.avif" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 mb-4">
                                            <div class="shop-content">
                                                <div class="shop-name">
                                                    <a class="m-0" href="#">Eyeshadow</a>
                                                </div>
                                                <div class="product-rating">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span class="product-main-price">$5000</span>
                                                    <span class="product-discount-price"><del>$1000</del></span>
                                                </div>
                                                <div class="shop-list-description">
                                                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                                                </div>
                                                <div class="shop-cart-list-two mt-2">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="icon fa fa-heart"></i></a>
                                                </div>
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="single-shop-product">
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/6.avif" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 mb-4">
                                            <div class="shop-content">
                                                <div class="shop-name">
                                                    <a class="m-0" href="#">Eyeshadow</a>
                                                </div>
                                                <div class="product-rating">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span class="product-main-price">$5000</span>
                                                    <span class="product-discount-price"><del>$1000</del></span>
                                                </div>
                                                <div class="shop-list-description">
                                                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                                                </div>
                                                <div class="shop-cart-list-two mt-2">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="icon fa fa-heart"></i></a>
                                                </div>
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-4">
                                            <div class="single-shop-product">
                                                <div class="shop-image">
                                                    <img src="src/assets/images/best-seller/7.avif" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 mb-4">
                                            <div class="shop-content">
                                                <div class="shop-name">
                                                    <a class="m-0" href="#">Eyeshadow</a>
                                                </div>
                                                <div class="product-rating">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span class="product-main-price">$5000</span>
                                                    <span class="product-discount-price"><del>$1000</del></span>
                                                </div>
                                                <div class="shop-list-description">
                                                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
                                                </div>
                                                <div class="shop-cart-list-two mt-2">
                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                    <a href="#"><i class="icon fa fa-heart"></i></a>
                                                </div>
                                                <div class="shop-offer-product">
                                                    <span>40%</span>
                                                </div>
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
        <!-- ==================== Product Store Page Area start ==================== -->
        

		<!-- ==================== Sponsor Logo Area Start ==================== -->
		<section class="mt-4 mb-4">
			<div class="sponsor-logo-area section-padding">
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
										<img src="src/assets/images/sponsor-logo/sponsor-1.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="src/assets/images/sponsor-logo/sponsor-2.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="src/assets/images/sponsor-logo/sponsor-3.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="src/assets/images/sponsor-logo/sponsor-4.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="src/assets/images/sponsor-logo/sponsor-5.jpg" alt="">
									</div>
								</swiper-slide>
								<swiper-slide>
									<div class="single-sponsor-logo">
										<img src="src/assets/images/sponsor-logo/sponsor-1.jpg" alt="">
									</div>
								</swiper-slide>
							</swiper>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ==================== Sponsor Logo Area End ==================== -->
	
	</div>
</template>