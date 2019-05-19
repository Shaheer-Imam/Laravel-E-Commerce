<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if($page=='home-v5') {
		$section_title = 'Make <br> dreams <br> <span>your reality.</span>';
		$section_class = 'section-products-carousel-with-bg 6-column-carousel-bg';
		$product_image ='assets/images/products/bg-1.png';
		$product_item  ='inc/components/product-item-2';

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 6,
			'slidesToScroll'	=> 6,
			'dots'				=> true,
			'arrows'			=> false,
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
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesToShow'		=> 4,
						'slidesToScroll'	=> 4
					)
				)
			)
		);

  	 }
  	 else if($page=='home-v3' || $page=='home-v2') {
		$section_class = 'stretch-full-width section-products-carousel-with-bg 7-column-carousel-bg';
		$section_title = 'Make <br> dreams <br> <span>your reality.</span>';
		$product_image ='assets/images/products/bg-2.png';
		$product_item  ='inc/components/product-item-2';

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
					'breakpoint'	=> 1201,
					'settings'		=> array(
						'slidesToShow'		=> 5,
						'slidesToScroll'	=> 5
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesToShow'		=> 5,
						'slidesToScroll'	=> 5
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
	}

  	else if($page=='home-v6') {
		$section_title = 'Today Deals <br><span>hurry up!</span>';
		$section_class = 'section-products-carousel-with-bg 6-column-carousel-bg';
		$product_image ='assets/images/products/bg-1.png';
		$product_item  ='inc/components/product-item-2';

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 6,
			'slidesToScroll'	=> 6,
			'dots'				=> true,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 800,
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
						'slidesToShow'		=> 3,
						'slidesToScroll'	=> 3
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesToShow'		=> 4,
						'slidesToScroll'	=> 4
					)
				)
			)

		);

	}

	else if($page=='home-v14') {
		$section_title = 'Drill Tools  <br><span>hurry up!</span>';
		$section_class = 'section-products-carousel-with-bg 6-column-carousel-bg';
		$product_image ='assets/images/garden/bg-1.png';
		$product_item  ='inc/components/product-item-10';

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 6,
			'slidesToScroll'	=> 6,
			'dots'				=> true,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 800,
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
						'slidesToShow'		=> 3,
						'slidesToScroll'	=> 3
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesToShow'		=> 4,
						'slidesToScroll'	=> 4
					)
				)
			)

		);

	}

?>
<section class="<?php echo $section_class; ?>">
	<div class="col-full">
		<div class="row">
			<header class="section-header">
				<h2 class="section-title"><?php echo $section_title; ?></h2>

				<?php if( $page=='home-v6' || $page=='home-v14' ) : ?>

					<div class="deal-countdown-timer">
						<span class="deal-time-diff" style="display:none;">28800</span>
						<div class="deal-countdown countdown"></div>
					</div><!-- .deal-countdown-timer-->
				<?php  endif; ?>

				<img alt="" src="<?php echo $product_image; ?>">
			</header>

			<div class="products-carousel-with-bg">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-6">
							@include($product_item)
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .products-carousel-with-bg -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</section><!-- .section-products-carousel-with-bg -->
