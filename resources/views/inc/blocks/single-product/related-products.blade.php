
<?php
	$carousel_args = array(
		'slidesToShow'		=> 7,
		'slidesToScroll'	=> 7,
		'dots'				=> true,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#tm-related-products-carousel .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 767,
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
					'slidesToShow'		=> 5,
					'slidesToScroll'	=> 5
				)
			)
		)
	);

?>

<div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
	<section class="related">
		<header class="section-header"><h2 class="section-title">Related products</h2>
			<nav class="custom-slick-nav"></nav>
		</header><!-- .section-header -->
		
		@include('inc/components/product-item')
		

	</section><!-- .single-product-wrapper -->
	
</div><!-- .tm-related-products-carousel -->