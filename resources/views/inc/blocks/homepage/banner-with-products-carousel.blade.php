<?php
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 7,
		'slidesToScroll'	=> 7,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 780,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 3,
					'slidesToScroll'	=> 3
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			),
			array(
				'breakpoint'	=> 1700,
				'settings'		=> array(
					'slidesToShow'		=> 5,
					'slidesToScroll'	=> 5
				)
			)
		)
	);
?>

<div class="home-v3-banner-with-products-carousel row">
	<div class="banner column-1">
		<a href="#"><div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/home-v3-banner.jpg ); height: 321px;" class="banner-bg"><div class="caption"><div class="banner-info"><h3 class="title">Edsssentials<br> of <strong>Wearable<br> Gadgets</strong></h3></div>
			<span class="banner-action button">View All</span></div></div>
		</a>
	</div><!-- .banner -->	

	<section class="section-products-carousel column-2">
		<div class="products-carousel carousel-without-attributes" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
			<div class="container-fluid">
				<div class="woocommerce columns-7">
					
					<?php @include'inc/components/product-item'; ?>
					
				</div><!-- .woocommerce -->				
			</div><!-- .container-fluid -->
		</div><!-- .products-carousel -->		
	</section><!-- .section-products-carousel -->
</div><!-- .home-v3-banner-with-products-carousel -->