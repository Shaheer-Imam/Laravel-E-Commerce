<?php

	$tab_carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 7,
		'slidesToScroll'	=> 7,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 700,
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
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 5,
					'slidesToScroll'	=> 5
				)
			)
		)
		
	);

	$tab_title = array(
		'Top 20' , 'Audio &amp; Video' , 'Laptops &amp; Computers' , 'Video Cameras'
	);

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if( $page=='home-v1') {
		$section_class = 'section-hot-new-arrivals section-products-carousel-tabs techmarket-tabs';
		$section_title = 'Hot Best Sellers';
		$product_item = 'inc/components/product-item';
  	}

  	else if( $page=='home-v2') {
		$section_class = 'section-hot-new-arrivals section-products-carousel-tabs techmarket-tabs';
		$section_title = 'Hot New Arrivals';
		$product_item = 'inc/components/product-item';
	}	

	else if( $page=='home-v4') {
		$section_class = 'section-products-carousel-tabs';
		$section_title = 'Hot Best Sellers';
		$product_item = 'inc/components/product-item';
	}
	

	else if( $page=='home-v6') {
		$section_class = 'section-products-carousel-tabs techmarket-tabs';
		$section_title = 'Wearable Gadgets 2017';
		$product_item = 'inc/components/product-item';
	}

	else if( $page=='home-v14') {
		$section_class = 'section-products-carousel-tabs techmarket-tabs';
		$section_title = 'Wearable Gadgets 2017';
		$product_item = 'inc/components/product-item-10';
	}

	$id = 'tab-' . uniqid();
?>

<section class="<?php echo $section_class; ?>">

	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<h2 class="section-title"><?php echo $section_title; ?></h2>

			<ul role="tablist" class="nav justify-content-end">

				<?php for ($i=0; $i < 4; $i++) { ?>
				<li class="nav-item"><a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" href="#<?php echo $id . $i; ?>" data-toggle="tab"><?php echo $tab_title[$i]; ?></a></li>
				<?php } ?>				
			</ul>

		</header><!-- .section-header -->

		<div class="tab-content">
			<?php for ($i=0; $i < 4; $i++) { ?>

			<div id="<?php echo $id . $i; ?>" class="tab-pane <?php echo $i == 0 ? 'active' : ''; ?>" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce">
							@include($product_item); 
						</div><!-- .woocommerce -->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<?php } ?>
		</div><!-- .tab-content -->		
	</div><!-- .section-products-carousel-tabs-wrap -->
</section><!-- .section-products-carousel-tabs -->
