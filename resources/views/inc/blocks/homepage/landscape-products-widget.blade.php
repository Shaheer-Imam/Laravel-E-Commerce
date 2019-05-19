<?php
	$carousel_args = array(
		'rows'				=> 6,
		'slidesPerRow'		=> 2,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#section-products-carousel-widgets .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 480,
				'settings'		=> array(
					'slidesPerRow'		=> 1,
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			),
			array(
				'breakpoint'	=> 750,
				'settings'		=> array(
					'slidesPerRow'		=> 1,
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			),
			array(
				'breakpoint'	=> 1190,
				'settings'		=> array(
					'rows'				=> 8,
					'slidesPerRow'		=> 1,
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesPerRow'		=> 1,
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			)
		)
	);
?>

<section class="section-landscape-products-widget-carousel type-2" id="section-products-carousel-widgets">
	<header class="section-header">
		<h2 class="section-title">Hand picked for you</h2>
		<nav class="custom-slick-nav"></nav>
	</header><!-- .section-header -->

	<div class="products-carousel hand-picked-carousel"  data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-1">
				<div class="products">
					@include('inc.blocks.homepage.landscape-product-widget')

				</div>
			</div>
		</div>
	</div><!-- .products-carousel -->
</section>