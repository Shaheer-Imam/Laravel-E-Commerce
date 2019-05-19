<?php
	$carousel_args = array(
		'infinite'          => false, 
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#sidebar-products-carousel .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 750,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			)
		)
	);
?>

<div class="widget widget_techmarket_products_carousel_widget">
	<section id="sidebar-products-carousel" class="sidebar-carousel">
		<header class="section-header">
			<h2 class="section-title">Latest Products</h2>
			<div class="custom-slick-nav"></div><!-- .custom-slick-nav -->
		</header>

		<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
			<div class="container-fluid">
				<div class="woocommerce columns-1">
					@include('inc.components.product-item')
				</div><!-- .woocommerce -->				
			</div><!-- .container-fluid -->
		</div><!-- .slick-dots -->
	</section>
</div>