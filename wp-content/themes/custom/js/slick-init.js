jQuery(document).ready(function(){
	jQuery('.slider').slick({
		slidesToShow: 1,
		pauseOnHover: true,
		fade: true,
		accessibility: true,
		arrows: true,
		speed: 2000,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 6000,
		responsive: [
					 {
							 breakpoint: 768, // mobile breakpoint
							 settings: {
									 arrows: false,
									 pauseOnHover: false,
							 }
					 }
			 ]
	});
});
