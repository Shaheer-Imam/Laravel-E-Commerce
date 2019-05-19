<?php	
	$tab_carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 4,
		'slidesToScroll'	=> 4,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 1200,
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
?>


<section class="section-hot-new-arrivals section-landscape-products-card-carousel-tabs section-products-carousel-tabs">
	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<h2 class="section-title">Tv & Visual Entertainment</h2>
			<ul role="tablist" class="nav justify-content-end">
				<li class="nav-item"><a class="nav-link active" href="#top-201" data-toggle="tab">Top 20</a></li>
				<li class="nav-item"><a class="nav-link " href="#4k-ultra-hd" data-toggle="tab">4K Ultra HD</a></li>
				<li class="nav-item"><a class="nav-link " href="#qled-tvs" data-toggle="tab">QLED Tvs</a></li>
				<li class="nav-item"><a class="nav-link " href="#suhd-tvs" data-toggle="tab">SUHD Tvs</a></li>
			</ul>
		</header><!-- .section-header -->

		<div class="tab-content">

			<div role="tabpanel" class="tab-pane active" id="top-201">
				<div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-4">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products -->	
						</div><!-- .woocommerce -->				
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->

			</div><!-- .tab-pane -->

			<div role="tabpanel" class="tab-pane" id="4k-ultra-hd">
				<div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-4">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products -->	
						</div><!-- .woocommerce -->				
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->				
			</div><!-- .tab-pane -->

			<div role="tabpanel" class="tab-pane" id="qled-tvs">
				<div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-4">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products -->	
						</div><!-- .woocommerce -->				
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->				
			</div><!-- .tab-pane -->

			<div role="tabpanel" class="tab-pane" id="suhd-tvs">
				<div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-4">
							<div class="products">
								<?php @include'inc/components/landscape-product-card-item'; ?>
							</div><!-- .products -->	
						</div><!-- .woocommerce -->				
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->				
			</div><!-- .tab-pane -->

		</div><!-- .tab-content -->
	</div><!-- .section-products-carousel-tabs-wrap -->
</section><!-- .section-hot-new-arrivals -->