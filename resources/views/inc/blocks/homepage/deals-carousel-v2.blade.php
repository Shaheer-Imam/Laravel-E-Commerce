<?php
$timer_value = '28800';
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 2,
		'slidesToScroll'	=> 2,
		'dots'				=> true,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#" class="slider-prev"><i class="tm tm-arrow-left"></i>Previous deal</a>',
		'nextArrow'			=> '<a href="#" class="slider-next">Next deal<i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#deals-carousel-2 .custom-slick-pagination',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 1590,
				'settings'		=> array(
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			)
		)
		
	);
?>
<section class="home-5-deals-carousel deals-carousel-v2" id="deals-carousel-2">
	<div class="deals-carousel-inner-block">
		<header class="section-header">
			<h2 class="section-title">
			<strong>Daily deals!</strong> Get our best prices.</h2>
			<div class="deal-countdown-timer">
				<span class="deal-time-diff" style="display:none;">28800</span>
				<div class="deal-countdown countdown"></div>
			</div>
			<nav class="custom-slick-pagination"></nav>
		</header>

		<div class="sale-products-with-timer-carousel timer-carousel-1">
			<?php @include 'inc/components/product-carousel-with-timer-gallery'; ?>
		</div>
	</div>
</section>
