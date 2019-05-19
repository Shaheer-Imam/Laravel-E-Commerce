<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if( $page=='home-v1') {
		$section_title = '<strong>Today Gadgets &amp; Mobile </strong>  accessories';
		$section_class = 'stretch-full-width';

		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 6,
			'slidesToScroll'	=> 6,
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
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesToShow'		=> 3,
						'slidesToScroll'	=> 3
					)
				),
				array(
					'breakpoint'	=> 1600,
					'settings'		=> array(
						'slidesToShow'		=> 4,
						'slidesToScroll'	=> 4
					)
				)
			)
		);
	}

	else if( $page=='home-v5') {
		$section_title = '<strong>2017 Gadgets &amp; Mobile </strong> accessories';
		$section_class = 'sidebar-version';

		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 5,
			'slidesToScroll'	=> 5,
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
?>

<section class="<?php echo $section_class; ?> section-products-carousel-with-vertical-tabs">
	<header class="section-header">
		<h2 class="section-title"><?php echo $section_title; ?></h2>
	</header><!-- /.section-header -->

	<div class="products-carousel-with-vertical-tabs row">
		<ul role="tablist" class="nav">
			<li class="nav-item"><a class="nav-link active" href="#desktop-pc" data-toggle="tab"><span class="category-title"><i class="tm tm-desktop-pc"></i> Desktop PCs</span><i class="tm tm-arrow-right"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#ultrabooks" data-toggle="tab"><span class="category-title"><i class="tm tm-laptop"></i> Ultrabooks</span><i class="tm tm-arrow-right"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#smartphones" data-toggle="tab"><span class="category-title"><i class="tm tm-smartphone"></i> Smartphones</span><i class="tm tm-arrow-right"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#internet-cams" data-toggle="tab"><span class="category-title"><i class="tm tm-digital-camera"></i> Internet Cams</span><i class="tm tm-arrow-right"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#accessories" data-toggle="tab"><span class="category-title"><i class="tm tm-accesories"></i> Accessories</span><i class="tm tm-arrow-right"></i></a></li>
		</ul>

		<div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/vertical-bg.png ); height: 552px;" class="tab-content">
			<div id="desktop-pc" class="tab-pane active" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-5">
							@include('inc.components.product-item')
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="ultrabooks" class="tab-pane" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-5">
							@include('inc.components.product-item');
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="smartphones" class="tab-pane" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-5">
							@include('inc.components.product-item'); 
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="internet-cams" class="tab-pane" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-5">
							@include('inc.components.product-item') 
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<div id="accessories" class="tab-pane" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-5">
							 @include('inc.components.product-item') 
						</div><!-- .woocommerce-->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->
		</div><!-- .tab-content -->
	</div><!-- /.products-carousel-with-vertical-tabs -->
</section><!-- /.section-products-carousel-with-vertical-tabs -->

