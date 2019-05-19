<?php

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$productImage = array(
		1 => array('product_image' => 'assets/images/garden/sm-1.jpg'),
		2 => array('product_image' => 'assets/images/garden/sm-2.jpg'),
		3 => array('product_image' => 'assets/images/garden/sm-3.jpg'),
		4 => array('product_image' => 'assets/images/garden/sm-4.jpg'),
		5 => array('product_image' => 'assets/images/garden/xs-1.jpg')
	);
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'rows'              => 4,
		'slidesPerRow'      => 1,
		'dots'				=> false,
		'arrows'			=> false,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#single-sidebar-carousel .custom-slick-nav'
			
	);
		
	
?>
<div class="widget widget_techmarket_products_carousel_widget">
	<section id="single-sidebar-carousel" class="section-products-carousel">
		<header class="section-header">
			<h2 class="section-title">Pressure Washers 2017</h2>
			<nav class="custom-slick-nav"></nav>
		</header><!-- .section-header -->

		<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
			<div class="container-fluid">
				<div class="woocommerce columns-1">
					<div class="products">
						<?php for ($i= 1; $i <= 5; $i++) { ?>	
							<div class="landscape-product-widget product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<div class="media">
										<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">

										<div class="media-body">
											<span class="price">
												<ins><span class="amount"> 50.99</span></ins>
												<del><span class="amount">26.99</span></del>
								
											</span><!-- .price -->

											<h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth  Speaker – Neon Green</h2>

											<div class="techmarket-product-rating">
												<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
												</div> 
												<span class="review-count">(0)</span>
											</div><!-- .techmarket-product-rating -->
										</div><!-- .media-body -->
									</div><!-- .media -->
								</a>
							</div><!-- .landscape-product-widget -->
						<?php } ?>		
					</div><!-- .products -->		
				</div><!-- .woocommerce -->				
			</div><!-- .container-fluid -->
		</div><!-- .products-carousel -->
	</section><!-- .section-products-carousel -->
</div><!-- .widget_techmarket_products_carousel_widget -->