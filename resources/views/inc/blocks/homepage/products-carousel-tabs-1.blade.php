<?php
	$tab_carousel_args = array(
		'infinite'          => false,
		'rows'				=> 2,
		'slidesPerRow'		=> 5,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 1023,
				'settings'		=> array(
					'slidesPerRow'	=> 2
				)
			),
			array(
				'breakpoint'	=> 1169,
				'settings'		=> array(
					'slidesPerRow'	=> 4
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesPerRow'	=> 3
				)
			)
			
		)
		
	);

	$id = 'tab-' . uniqid();

	$tab_title = array(
		'New Arrivals' , 'On Sale' , 'Best Rated'
	);
?>
<section class="column-2 section-products-carousel-tabs tab-carousel-1">

	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<ul role="tablist" class="nav justify-content-end">

				<?php for ($i=0; $i < 3; $i++) { ?>
				<li class="nav-item">
					<a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" href="#<?php echo $id . $i; ?>" data-toggle="tab"><?php echo $tab_title[$i]; ?></a>
				</li>
				<?php } ?>

			</ul>
		</header><!-- .section-header -->

		<div class="tab-content">
			<?php for ($i=0; $i < 4; $i++) { ?>

			<div id="<?php echo $id . $i; ?>" class="tab-pane <?php echo $i == 0 ? 'active' : ''; ?>" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce">
							@include('inc.components.product-item')
						</div><!-- .woocommerce -->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<?php } ?>	
		</div><!-- .tab-content -->
	</div><!-- .section-products-carousel-tabs-wrap -->
</section><!-- .section-products-carousel-tabs -->
