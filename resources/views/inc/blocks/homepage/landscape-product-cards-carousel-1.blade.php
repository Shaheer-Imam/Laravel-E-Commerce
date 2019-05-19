<?php
	$tab_carousel_args = array(
		'infinite'          => false,
		'rows'				=> 2,
		'slidesPerRow'		=> 2,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesPerRow'		=> 1,
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			)
		)
		
	);
?>

<section style="background-size: cover; background-position: center center; background-image: url( assets/images/organic/organic-banner.jpg ); height: 853px;" class="section-landscape-full-product-cards-carousel">
	<div class="col-full">
		<header class="section-header">
			<h2 class="section-title">
				<strong>Snacks</strong> - way better energy  calories
			</h2>
		</header><!-- .section-header -->

		<div class="row">
			<div class="landscape-full-product-cards-carousel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-2">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item-1'; ?>
							</div><!-- .products -->
						</div><!-- .woocommerce -->
					</div><!-- .container-fluid -->
				</div><!-- .slick-dots -->
			</div><!-- .landscape-full-product-cards-carousel -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</section><!-- .slick-dots -->
