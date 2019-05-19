<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if( $page=='home-v3') {
		$section_title = 'Hot New Arrivals';
		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 7,
			'slidesToScroll'	=> 7,
			'dots'				=> true,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#section-products-carousel-7 .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 779,
					'settings'		=> array(
						'slidesToShow'	=> 2,
						'slidesToScroll' => 2
					)
				),
				array(
					'breakpoint'	=> 780,
					'settings'		=> array(
						'slidesToShow'	=> 3,
						'slidesToScroll' => 3
					)
				),
				array(
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesToShow'	=> 4,
						'slidesToScroll' => 4
					)
				),
				array(
					'breakpoint'	=> 1600,
					'settings'		=> array(
						'slidesToShow'	=> 5,
						'slidesToScroll' => 5
					)
				)
			)
			
		);
	}

	else
	{
		$section_title = 'Top Selling';
		
		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 7,
			'slidesToScroll'	=> 1,
			'dots'				=> true,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#section-products-carousel-7 .custom-slick-nav',
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
						'slidesToShow'		=> 5,
						'slidesToScroll'	=> 5
					)
				)
			)
		);
		
	}
?>
<section class="section-products-carousel new-arrival-carousel" id="section-products-carousel-7">
	<header class="section-header">
		<h2 class="section-title"> 7 column product crousel</h2>
		<nav class="custom-slick-nav"></nav>
	</header><!-- .section-header -->

	<div class="products-carousel 7-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-7">
				@include('inc/components/product-item')
			</div><!-- .woocommerce -->
		</div><!-- .row -->
	</div><!-- .products-carousel -->
</section><!-- .section-products-carousel -->