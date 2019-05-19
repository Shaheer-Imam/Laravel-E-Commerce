 <?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	$tab_carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 5,
		'slidesToScroll'	=> 5,
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
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			)
		)
		
	);
	
	if($page=='home-v2') {
		$section_title_1  = 'CES 2017 Arrivals';
		$column  = '5';
		$section_title_2  = 'Video Cameras';
		$section_class = '5-column-carousel';
		$section_product_item = 'inc/components/product-item';
	}

	else if($page=='home-v4') {
		$section_title_1  = 'CES 2017 Arrivals';
		$column  = '4';
		$section_title_2  = 'Cell Phones & Tablets';
		$section_class = 'carousel-tabs-with-no-hover section-products-carousel-tabs';
		$section_product_item = 'inc/components/product-item-6';

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
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesToShow'		=> 4,
						'slidesToScroll'	=> 4
					)
				)
			)
		);
    }
    
?>

	<section class="section-hot-new-arrivals section-products-carousel-tabs">

		<div class="section-products-carousel-tabs-wrap">
			<header class="section-header">
				<h2 class="section-title"><?php echo $section_title_1; ?></h2>

				<ul role="tablist" class="nav justify-content-end">
					
						<li class="nav-item">
							<a class="nav-link active" href="#top-20" data-toggle="tab" role="tab" aria-controls="top-20">Top 20</a>
						</li>

					
						<li class="nav-item">
							<a class="nav-link " href="#audio-video" data-toggle="tab" role="tab" aria-controls="audio-video">Audio &amp; Video</a>
						</li>

					
						<li class="nav-item">
							<a class="nav-link " href="#laptops-computers" data-toggle="tab" role="tab" aria-controls="laptops-computers">Laptops &amp; Computers</a>
						</li>

					
						<li class="nav-item">
							<a class="nav-link " href="#video-cameras" data-toggle="tab" role="tab" aria-controls="video-cameras">Video Cameras</a>
						</li>

				</ul>
				
			</header><!-- .section-header -->

			<div class="tab-content">

				<div role="tabpanel" class="tab-pane active" id="top-20">
					<div class="products-carousel <?php echo $section_class; ?>" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-<?php echo $column; ?>">
								 @include($section_product_item) 
							</div><!-- .woocommerce -->				
						</div><!-- .container-fluid -->
					</div><!-- .slick-dots -->
				</div><!-- .tab-pane -->

				<div role="tabpanel" class="tab-pane" id="audio-video">
					<div class="products-carousel <?php echo $section_class; ?>" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-<?php echo $column; ?>">
								 @include($section_product_item)
							</div><!-- .woocommerce -->				
						</div><!-- .container-fluid -->
					</div><!-- .slick-dots -->				
				</div><!-- .tab-pane -->

				<div role="tabpanel" class="tab-pane" id="laptops-computers">
					<div class="products-carousel <?php echo $section_class; ?>" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-<?php echo $column; ?>">
								@include($section_product_item)
							</div><!-- .woocommerce -->				
						</div><!-- .container-fluid -->
					</div><!-- .slick-dots -->				
				</div><!-- .tab-pane -->

				<div role="tabpanel" class="tab-pane" id="video-cameras">
					<div class="products-carousel <?php echo $section_class; ?>" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-<?php echo $column; ?>">
								@include($section_product_item)
							</div><!-- .woocommerce -->				
						</div><!-- .container-fluid -->
					</div><!-- .slick-dots -->				
				</div><!-- .tab-pane -->

			</div><!-- .tab-content -->
		</div><!-- .section-products-carousel-tabs-wrap -->
	</section><!-- .section-products-carousel-tabs -->

	<section class="section-hot-new-arrivals section-products-carousel-tabs">

		<div class="section-products-carousel-tabs-wrap">
			<header class="section-header">
				<h2 class="section-title"><?php echo $section_title_2; ?></h2>

				<ul role="tablist" class="nav justify-content-end">
					
						<li class="nav-item">
							<a class="nav-link active" href="#top-20-2" data-toggle="tab" role="tab" aria-controls="top-20-2">Top 20</a>
						</li>

					
						<li class="nav-item">
							<a class="nav-link " href="#audio-video-2" data-toggle="tab" role="tab" aria-controls="audio-video-2">Audio &amp; Video</a>
						</li>

					
						<li class="nav-item">
							<a class="nav-link " href="#laptops-computers-2" data-toggle="tab" role="tab" aria-controls="laptops-computers-2">Laptops &amp; Computers</a>
						</li>

					
						<li class="nav-item">
							<a class="nav-link " href="#video-cameras-2" data-toggle="tab" role="tab" aria-controls="video-cameras-2">Video Cameras</a>
						</li>

				</ul>
				
			</header><!-- .section-header -->

			<div class="tab-content">

				<div role="tabpanel" class="tab-pane active" id="top-20-2">
					<div class="products-carousel <?php echo $section_class; ?>" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-<?php echo $column; ?>">
								@include($section_product_item)
							</div><!-- .woocommerce -->				
						</div><!-- .container-fluid -->
					</div><!-- .slick-dots -->


				</div><!-- .tab-pane -->

				<div role="tabpanel" class="tab-pane" id="audio-video-2">
					<div class="products-carousel <?php echo $section_class; ?>" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-<?php echo $column; ?>">
								@include($section_product_item)
							</div><!-- .woocommerce -->				
						</div><!-- .container-fluid -->
					</div><!-- .slick-dots -->				
				</div><!-- .tab-pane -->

				<div role="tabpanel" class="tab-pane" id="laptops-computers-2">
					<div class="products-carousel <?php echo $section_class; ?>" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-<?php echo $column; ?>">
								@include($section_product_item)
							</div><!-- .woocommerce -->				
						</div><!-- .container-fluid -->
					</div><!-- .slick-dots -->				
				</div><!-- .tab-pane -->

				<div role="tabpanel" class="tab-pane" id="video-cameras-2">
					<div class="products-carousel <?php echo $section_class; ?>" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-<?php echo $column; ?>">
								@include($section_product_item)
							</div><!-- .woocommerce -->				
						</div><!-- .container-fluid -->
					</div><!-- .slick-dots -->				
				</div><!-- .tab-pane -->

			</div><!-- .tab-content -->
		</div><!-- .section-products-carousel-tabs-wrap -->
	</section><!-- .section-products-carousel-tabs -->
