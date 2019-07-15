(function ($) {
	"use strict";

	// sideNav - Start --------------------------------------------------
	$(".button-collapse").sideNav();
	// sideNav - End --------------------------------------------------

	// main-searchbox - Start --------------------------------------------------
	$(".search-trigger").on("click", function () {
		$('#myNav').css("height", "100%");
	});
	$(".closebtn").on("click", function () {
		$('#myNav').css("height", "0%");
	});
	// main-searchbox - End --------------------------------------------------

	// sidebar testimonial --------------------------------------------------
	$('.carousel.carousel-slider').carousel({ fullWidth: true });

	// main top slider --------------------------------------------------
	$(document).ready(function () {
		$('.slider').slider();
	});

	// -----------------------------------------------------------------
	// --- 1 --- back to top
	// -----------------------------------------------------------------
	$(document).ready(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 200) {
				$('.backToTop:hidden').stop(true, true).fadeIn();
			} else {
				$('.backToTop').stop(true, true).fadeOut();
			}
		});
		$(function () {
			$(".scroll").click(function () {
				$("html,body").animate({
					scrollTop: $(".thetop").offset().top
				}, "slow");
				return false
			})
		});

	});

})(jQuery);