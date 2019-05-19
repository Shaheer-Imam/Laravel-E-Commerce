<?php
	$tab_carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 2,
		'slidesToScroll'	=> 2,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 780,
				'settings'		=> array(
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			)
		)
	);
?>

<div class="home-v10-banner-with-products-carousel row stretch-full-width">
	<div class="banner column-1">
		<a href="{{route("shop")}}">
			<div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/10-5.jpg ); height: 724px;" class="banner-bg">
				<div class="caption">
					<div class="banner-info">
						<h3 class="title"><span>Be</span>Active</h3> 
					</div><!-- .banner-info -->
				</div><!-- .caption -->
			</div><!-- .banner-bg -->
		</a>
	</div><!-- .banner -->

	<section class="section-products-carousel column-2">
		<header class="section-header"> </header>
		<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
			<div class="container-fluid">
				<div class="woocommerce columns-2">
					<?php @include'inc/components/product-item-8'; ?>
				</div><!-- .woocommerce-->

			</div><!-- .container-fluid -->
		</div><!-- .products-carousel -->
	</section><!-- .section-products-carousel -->
</div><!-- .home-v10-banner-with-products-carousel -->