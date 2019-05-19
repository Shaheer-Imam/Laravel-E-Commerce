<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if( $page=='home-v6') {
		$section_title = 'Cell Phones & Tablets';
		$product_item = 'inc/components/product-item';

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 6,
			'slidesToScroll'	=> 6,
			'dots'				=> true,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#homev6-carousel-3 .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 750,
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
	}

	else if( $page=='home-v14') {
		$section_title = 'Outdoor Dining Furnitures';
		$product_item = 'inc/components/product-item-11';

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 6,
			'slidesToScroll'	=> 6,
			'dots'				=> true,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#homev6-carousel-3 .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 750,
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
	}
	else {
		$section_title = 'Best Offers';
		$product_item = 'inc/components/product-item';
		
		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 6,
			'slidesToScroll'	=> 1,
			'dots'				=> true,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#homev6-carousel-3 .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 480,
					'settings'		=> array(
						'slidesToShow'		=> 1,
						'slidesToScroll'	=> 1
					)
				),
				array(
					'breakpoint'	=> 750,
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
				)
			)
		);
		
	}
?>

<section class="section-products-carousel" id="homev6-carousel-3">
	<header class="section-header">
		<h2 class="section-title">Product Crousel title Name</h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
	</header><!-- .section-header -->

	<div class="products-carousel 6-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-6">
				 @include('inc/components/product-item')
			</div><!-- .woocommerce-->
		</div><!-- .container-fluid -->
	</div><!-- .products-carousel -->
</section><!-- .section-products-carousel -->