AOS.init({
	duration: 800,
	easing: 'slide',
	once: false
});

jQuery(document).ready(function ($) {
	var siteCarousel = function () {
		if ($('.nonloop-block-13').length > 0) {
			$('.nonloop-block-13').owlCarousel({
				center: false,
				items: 1,
				loop: true,
				stagePadding: 0,
				margin: 0,
				autoplay: true,
				nav: true,
				navText: [
					'<span class="icon-arrow_back">',
					'<span class="icon-arrow_forward">'
				],
				responsive: {
					600: {
						margin: 0,
						nav: true,
						items: 2
					},
					1000: {
						margin: 0,
						stagePadding: 0,
						nav: true,
						items: 3
					},
					1200: {
						margin: 0,
						stagePadding: 0,
						nav: true,
						items: 4
					}
				}
			});
		}

		$('.slide-one-item').owlCarousel({
			center: false,
			items: 1,
			loop: true,
			stagePadding: 0,
			margin: 0,
			smartSpeed: 1000,
			autoplay: true,
			pauseOnHover: false,
			autoHeight: true,
			nav: false,
			navText: [
				'<span class="icon-keyboard_arrow_left">',
				'<span class="icon-keyboard_arrow_right">'
			]
		});
	};

	siteCarousel();

	const checkStickyHeader = () => {
		const st = $(window).scrollTop();
		if (st > 60) {
			$('.site-navbar').addClass('shrink');
		} else {
			$('.site-navbar').removeClass('shrink');
		}
	};

	$(window).on('scroll', checkStickyHeader);

	checkStickyHeader();


	$('.fancybox').on('click', function () {
		const visibleLinks = $('.fancybox');
		$.fancybox.open(visibleLinks, {}, visibleLinks.index(this));
		return false;
	});
});
