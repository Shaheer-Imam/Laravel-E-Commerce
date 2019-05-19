<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	if($page=='home-v5') {
		$section_class = 'column-1-single-carousel section-single-carousel';
		$section_id = 'section-single-carousel';
		$section_product_item = 'inc/components/product-item-3';
		$section_class_2 = 'column-2 section-products-carousel-tabs';

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 1,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#section-single-carousel .custom-slick-nav',
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
		
		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 3,
			'slidesToScroll'	=> 3,
			'dots'				=> false,
			'arrows'			=> false,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
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
				)
			)				
		);
	}

	else if($page=='home-v4') {
		$section_class = 'carousel-tabs-with-no-hover section-single-carousel column-1-single-carousel ';
		$section_id = 'section-single-carousel';
		$section_product_item = 'inc/components/product-item-6';
		$section_class_2 = 'carousel-tabs-with-no-hover column-2 section-products-carousel-tabs';

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 1,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#section-single-carousel .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 766,
					'settings'		=> array(
						'slidesToShow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
				array(
					'breakpoint'	=> 799,
					'settings'		=> array(
						'slidesToShow'		=> 1,
						'slidesToScroll'	=> 1
					)
				),
				array(
					'breakpoint'	=> 800,
					'settings'		=> array(
						'slidesToShow'		=> 2,
						'slidesToScroll'	=> 2
					)
				)
			)
		);

		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 3,
			'slidesToScroll'	=> 3,
			'dots'				=> false,
			'arrows'			=> false,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesToShow'		=> 2,
						'slidesToScroll'	=> 2
					)
				)
			)
			

		);
	}

	
  	else if($page=='home-v6') {
		$section_class = 'column-1 section-double-carousel';
		$section_id = 'section-double-carousel';
		$section_product_item = 'inc/components/product-item';
		$section_class_2 = 'column-2 section-products-carousel-tabs';
		

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 2,
			'slidesToScroll'	=> 2,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#section-double-carousel .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 750,
					'settings'		=> array(
						'slidesToShow'	=> 2,
						'slidesToScroll' => 2
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesToShow'	=> 1,
						'slidesToScroll' => 1
					)
				)		
			)
		);

		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 4,
			'slidesToScroll'	=> 4,
			'dots'				=> false,
			'arrows'			=> false,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
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
			)
		);
		
	}

	else if($page=='home-v14') {
		$section_class = 'column-1 section-double-carousel';
		$section_id = 'section-double-carousel';
		$section_product_item = 'inc/components/product-item-10';
		$section_class_2 = 'column-2 section-products-carousel-tabs';
		

		$carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 2,
			'slidesToScroll'	=> 2,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#section-double-carousel .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 750,
					'settings'		=> array(
						'slidesToShow'	=> 2,
						'slidesToScroll' => 2
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesToShow'	=> 1,
						'slidesToScroll' => 1
					)
				)		
			)
		);

		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 4,
			'slidesToScroll'	=> 4,
			'dots'				=> false,
			'arrows'			=> false,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
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
			)
		);
		
	}
	

	$id = 'tab-' . uniqid();

	$tab_title = array(
		'New Arrivals' , 'On Sale' , 'Best Rated' 
	);
?>
<section class="section-single-carousel-with-tab-product type-2">
	<div class="row">
		<section class="<?php echo $section_class; ?>" id="<?php echo $section_id; ?>">
			<header class="section-header">
				<h2 class="section-title">Trending Now</h2>
				<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
			</header><!-- .section-header -->

			<div class="products-carousel"  data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
				<div class="container-fluid">
					<div class="woocommerce columns-1">
						<?php @include$section_product_item; ?>
					</div><!-- .woocommerce-->
				</div><!-- .container-fluid -->
			</div><!-- .products-carousel -->
		</section>

		<section class="<?php echo $section_class_2; ?>">
			<div class="section-products-carousel-tabs-wrap">
				<header class="section-header">
					<ul role="tablist" class="nav justify-content-end">
						<?php for ($i=0; $i < 3; $i++) { ?>
						<li class="nav-item"><a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" href="#<?php echo $id . $i; ?>" data-toggle="tab"><?php echo $tab_title[$i]; ?></a></li>
						<?php } ?>
					</ul>
				</header>

				<div class="tab-content">
					<?php for ($i=0; $i < 3; $i++) { ?>

					<div id="<?php echo $id . $i; ?>" class="tab-pane <?php echo $i == 0 ? 'active' : ''; ?>" role="tabpanel">
						<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
							<div class="container-fluid">
								<div class="woocommerce columns-4">
									<?php @include$section_product_item; ?>
								</div><!-- .woocommerce -->
							</div><!-- .container-fluid -->
						</div><!-- .products-carousel -->
					</div><!-- .tab-pane -->

					<?php } ?>
				</div><!-- .tab-content -->
			</div><!-- .section-products-carousel-tabs-wrap -->
		</section><!-- .section-products-carousel-tabs -->
	</div>
</section><!-- .section-single-carousel-with-tab-product -->
