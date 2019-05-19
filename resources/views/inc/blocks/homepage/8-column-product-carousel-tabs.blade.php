<?php

	$tab_title = array(
		'Top 20' , 'Audio &amp; Video' , 'Laptops &amp; Computers' , 'Video Cameras'
	);

	$tab_carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 8,
		'slidesToScroll'	=> 8,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 1000,
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
					'slidesToShow'		=> 5,
					'slidesToScroll'	=> 5
				)
			)
		)
		
	);

	$id = 'tab-' . uniqid();
?>
<section class="section-trending-noe section-products-carousel-tabs">
	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<h2 class="section-title">Trending Now</h2>
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
							@include('inc/components/product-item')
						</div><!-- .woocommerce -->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<?php } ?>			
		</div><!-- .tab-content -->
	</div><!-- .section-products-carousel-tabs-wrap -->
</section><!-- .section-products-carousel -->
