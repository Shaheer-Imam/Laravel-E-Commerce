<?php

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v3';
	$section_title = '';
	
	if( $page=='home-v3') {
		$section_title = 'Trending Now';
  	} else if( $page=='home-v12') {
		$section_title = 'Best Value Perfumes & Beauty';		
	}

	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 8,
		'slidesToScroll'	=> 8,
		'dots'				=> true,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#section-products-carousel-8 .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 779,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
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
				'breakpoint'	=> 1700,
				'settings'		=> array(
					'slidesToShow'		=> 6,
					'slidesToScroll'	=> 6
				)
			)
		)
	);
?>

<section class="section-products-carousel"  id="section-products-carousel-8">
	<header class="section-header">
		<h2 class="section-title"><?php echo $section_title; ?></h2>
		<nav class="custom-slick-nav"></nav>
	</header><!-- .section-header -->

	<div class="products-carousel 8-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-8">
				<?php @include'inc/components/product-item'; ?>
			</div><!-- .woocommerce -->
		</div><!-- .row -->
	</div><!-- .products-carousel -->
</section><!-- .section-products-carousel -->