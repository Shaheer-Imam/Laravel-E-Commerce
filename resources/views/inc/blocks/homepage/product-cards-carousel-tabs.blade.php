<?php
	$tab_carousel_args = array(
		'infinite'          => false,
		'rows'				=> 2,
		'slidesPerRow'		=> 3,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 1160,
				'settings'		=> array(
					'slidesPerRow'	=> 2,
					'slidesToShow'=> 1
				)
			)
		)
	);
?>

<section class="section-product-cards-carousel-tabs stretch-full-width section-products-carousel-tabs">
	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<h2 class="section-title">Hurry up! <span>Special Offers</span></h2>
			<ul role="tablist" class="nav justify-content-center">
				<li class="nav-item"><a class="nav-link active" href="#cameras" data-toggle="tab">Cameras</a></li>
				<li class="nav-item"><a class="nav-link " href="#audio" data-toggle="tab">Audio</a></li>
				<li class="nav-item"><a class="nav-link " href="#gps-navigation" data-toggle="tab">GPS &amp; Navigation</a></li>
				<li class="nav-item"><a class="nav-link " href="#tv-video" data-toggle="tab">TV &amp; Video</a></li>
				<li class="nav-item"><a class="nav-link " href="#cell-phones" data-toggle="tab">Cell Phones</a></li>
				<li class="nav-item"><a class="nav-link " href="#computers" data-toggle="tab">Computers</a></li>
				<li class="nav-item"><a class="nav-link " href="#accessories" data-toggle="tab">Accessories</a></li>
			</ul>
		</header>

		<div class="tab-content">
			<div id="cameras" class="tab-pane active" role="tabpanel">
				<div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>" >
					<div class="container-fluid">
						<div class="woocommerce columns-3">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products-->
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="audio" class="tab-pane" role="tabpanel">
				<div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>" >
					<div class="container-fluid">
						<div class="woocommerce columns-3">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products-->
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="gps-navigation" class="tab-pane" role="tabpanel">
				<div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>" >
					<div class="container-fluid">
						<div class="woocommerce columns-3">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products-->
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="tv-video" class="tab-pane" role="tabpanel">
				<div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-3">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products-->
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="cell-phones" class="tab-pane" role="tabpanel">
				<div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-3">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products-->
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="computers" class="tab-pane" role="tabpanel">
				<div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-3">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products-->
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="accessories" class="tab-pane" role="tabpanel">
				<div class="products-carousel special-offer-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-3">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products-->
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->
		</div><!-- .tab-content -->
	</div><!-- .section-products-carousel-tabs-wrap -->
</section><!-- .section-product-cards-carousel-tabs-->