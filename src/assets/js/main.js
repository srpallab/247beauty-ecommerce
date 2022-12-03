(function ($) {
"use strict";


// sponsor-logo-active

$('.sponsor-logo-active').owlCarousel({
	loop:true,
	margin:30,
	navText:false,
	nav:true,
	dots:false,
	responsive:{
			0:{
					items:1
			},
			400:{
					items:2
			},
			768:{
					items:4
			},
			1200:{
					items:6
			},
			992:{
					items:5
			}
	}
})


// product-details-active
$('.product-details-active').owlCarousel({
	loop:true,
	margin:30,
	items:1,
	navText:false,
	nav:true,
	dots:true,
	autoplay:false,
	dotsData:true,
})

// Best Sellers
$('.best-sellers-active').owlCarousel({
	loop:true,
	margin:30,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	nav:true,
	dots:false,
	responsive:{
			0:{
					items:1
			},
			768:{
					items:2
			},
			992:{
					items:3
			},
			1200:{
					items:4
			}
	}
})

// meanmenu
$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "992"
});

//off-canvas-menu
$(".menu-trigger").on("click", function() {
	$(".off-canvas-menu, .off-canvas-overlay").addClass("active");
	return false;
});
$(".menu-close, .off-canvas-overlay").on("click", function() {
	$(".off-canvas-menu, .off-canvas-overlay").removeClass("active");
});




})(jQuery);