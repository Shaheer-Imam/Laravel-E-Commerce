<?php
	$carousel_args = array(
		'slidesToShow'		=> 4,
		'slidesToScroll'	=> 2,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#landscape-products-carousel .custom-slick-nav',
		'responsive'		=> array(
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
					'slidesToShow'		=> 3,
					'slidesToScroll'	=> 3
				)
			)
		)
		
	);
?>
<section class="section-landscape-products-carousel 4-column-landscape-carousel" id="landscape-products-carousel" >
	<header class="section-header">
		<h2 class="section-title">Video Cameras & Photography</h2>
		<nav class="custom-slick-nav"></nav>
	</header>

	<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-5">

				@include('inc.components.product-card-item')
				

			</div><!-- /.woocommerce -->
		</div><!-- /.container-fluid -->
	</div><!-- /.products-carousel -->
</section><!-- /.section-landscape-products-carousel -->
