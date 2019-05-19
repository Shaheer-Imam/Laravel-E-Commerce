<?php
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 8,
		'slidesToScroll'	=> 8,
		'dots'				=> true,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#homev12-carousel-1 .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 650,
				'settings'		=> array(
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			),
			array(
				'breakpoint'	=> 780,
				'settings'		=> array(
					'slidesToShow'		=> 3,
					'slidesToScroll'	=> 3
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 6,
					'slidesToScroll'	=> 6
				)
			)
		)
	);
?>

<section  class="section-products-carousel" id="homev12-carousel-1">
	<header class="section-header">
		<h2 class="section-title">Hot New Arrivals You might Like</h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
	</header><!-- .section-header -->

	<div class="products-carousel" id="new-arrival-carousel"  data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-8">
				<?php @include'inc/components/product-item'; ?>
			</div>

		</div><!-- .container-fluid -->
	</div><!-- .products-carousel -->						
</section><!-- .section-products-carousel -->