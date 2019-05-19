<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1'; 
	if($page=='home-v5') {
		$section_class = 'best-rated-1';

		$tab_carousel_args = array(
			'infinite'          => false,
			'rows'              => 2,
			'slidePerRow'       => 4,
			'slidesToShow'		=> 4,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 780,
					'settings'		=> array(
						'rows'              => 2,
						'slidePerRow'       => 2,
						'slidesToShow'     => 2,						
						'slidesToScroll'	=> 1
					)
				),
				array(
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'rows'              => 2,
						'slidePerRow'       => 3,
						'slidesToShow'    => 3,						
						'slidesToScroll'	=> 1
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'rows'              => 2,
						'slidePerRow'       => 3,
						'slidesToShow'      => 3,
						'slidesToScroll'	=> 1
					)
				)
			)
		);

		$product_item = 'inc/components/product-card-item';
  	}

  	else if($page=='home-v6') {
		
		$section_class = 'best-rated-2';
		
		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 4,
			'slidesToScroll'	=> 4,
			'dots'				=> true,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 900,
					'settings'		=> array(
						'slidesToShow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesToShow'		=> 3,
						'slidesToScroll'	=> 3
					)
				)
			)
		);

		$product_item = 'inc/components/product-card-item';
	} 

	else if($page=='home-v14') {
		
		$section_class = 'best-rated-2';
		
		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 4,
			'slidesToScroll'	=> 4,
			'dots'				=> true,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 900,
					'settings'		=> array(
						'slidesToShow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesToShow'		=> 3,
						'slidesToScroll'	=> 3
					)
				)
			)
		);

		$product_item = 'inc/components/product-card-item-2';
	} 

	$id = 'tab-' . uniqid();
	$tab_title = array(
		'Top 20' , 'Audio &amp; Video' , 'Laptops &amp; Computers' , 'Video Cameras' 
	);

?>
<section class="section-landscape-products-carousel-tab section-products-carousel-tabs <?php echo $section_class; ?>">
	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<h2 class="section-title">Best Rated Sellers</h2>
			<ul role="tablist" class="nav justify-content-end">
				<?php for ($i=0; $i < 4; $i++) { ?>
					<li class="nav-item"><a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" href="#<?php echo $id . $i; ?>" data-toggle="tab"><?php echo $tab_title[$i]; ?></a></li>
				<?php } ?>
			</ul>
		</header><!-- .section-header-->

		<div class="tab-content">
			<?php for ($i=0; $i < 4; $i++) { ?>

			<div id="<?php echo $id . $i; ?>" class="tab-pane <?php echo $i == 0 ? 'active' : ''; ?>" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce">
							<?php @include$product_item; ?>
							
						</div><!-- .woocommerce -->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<?php } ?>
		</div><!-- .tab-content -->
	</div><!-- .section-products-carousel-tabs-wrap -->
</section><!-- .section-landscape-products-carousel-tab -->