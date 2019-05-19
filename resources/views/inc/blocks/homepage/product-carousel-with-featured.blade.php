<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if($page=='home-v5') {
		$section_class = 'featured-product-left type-2 section-products-carousel-tabs section-product-carousel-with-featured-product carousel-with-featured-2';
		$section_title = 'Bring on the New Year';
		$product_item = 'inc/components/product-item';

		$tab_carousel_args = array(
			'infinite'          => false,
			'rows'				=> 2,
			'slidesPerRow'		=> 4,
			'slidesToShow'		=> 1,
			'slidesToScroll'	=> 1,
			'dots'				=> true,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 750,
					'settings'		=> array(
						'slidesPerRow'		=> 2,
						'slidesToScroll'	=> 1
					)
				),
				array(
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesPerRow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesPerRow'		=> 3,
						'slidesToScroll'	=> 3
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesPerRow'		=> 3,
						'slidesToScroll'	=> 3
					)
				)
			)
		);
  	}

  	else if($page=='home-v1') {
		$section_class='full-width section-products-carousel-tabs section-product-carousel-with-featured-product carousel-with-featured-1';
		$section_title = 'Hot New Arrivals';
		$product_item = 'inc/components/product-item';

		$tab_carousel_args = array(
			'rows'				=> 2,
			'slidesPerRow'		=> 6,
			'slidesToShow'		=> 1,
			'slidesToScroll'	=> 1,
			'dots'				=> true,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesPerRow'		=> 2,
						'slidesToScroll'	=> 1
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesPerRow'		=> 3,
						'slidesToScroll'	=> 1
					)
				),
				array(
					'breakpoint'	=> 1599,
					'settings'		=> array(
						'slidesPerRow'		=> 4,
						'slidesToScroll'	=> 1
					)
				)
			)
			
		);
	}

  	else if($page=='home-v6') {
		$section_class = 'type-2 section-products-carousel-tabs section-product-carousel-with-featured-product carousel-with-featured-3';
		$section_title = 'Cameras &amp; Camcoders';
		$product_item = 'inc/components/product-item';

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
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesPerRow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesPerRow'		=> 3,
						'slidesToScroll'	=> 3
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesPerRow'		=> 4,
						'slidesToScroll'	=> 4
					)
				)
			)
		);
	}

	else if($page=='home-v14') {
		$section_class = 'type-2 section-products-carousel-tabs section-product-carousel-with-featured-product carousel-with-featured-3';
		$section_title = 'Plants & Decoration';
		$product_item = 'inc/components/product-item-10';

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
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesPerRow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesPerRow'		=> 3,
						'slidesToScroll'	=> 3
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesPerRow'		=> 4,
						'slidesToScroll'	=> 4
					)
				)
			)

		);
	}


?>

<section class="<?php echo $section_class; ?>">
	<header class="section-header">
		<h2 class="section-title"><?php echo $section_title; ?></h2>
		<ul role="tablist" class="nav justify-content-center">
			<li class="nav-item"><a class="nav-link active" href="#top-20-1" data-toggle="tab">Top 20</a></li>
			<li class="nav-item"><a class="nav-link" href="#digital-cameras" data-toggle="tab">Digital Cameras</a></li>
			<li class="nav-item"><a class="nav-link" href="#action-cameras" data-toggle="tab">Action Cameras</a></li>
			<li class="nav-item"><a class="nav-link" href="#compacts" data-toggle="tab">Compacts</a></li>
		</ul>
	</header>

	<div class="tab-content">
		<div role="tabpanel" id="top-20-1" class="tab-pane active">
			<div class="tab-product-carousel-with-featured-product">
				<div class="tab-carousel-products">
					<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-5">
								 @include($product_item); 
							</div><!-- .woocommerce-->
						</div><!-- .container-fluid -->
					</div><!-- .products-carousel -->
				</div><!-- .tab-carousel-products -->

				<div class="tab-featured-product">
					<div class="woocommerce columns-1">
						<div class="products">
							<div class="tab-product-featured product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="/assets/images/products/featured.jpg">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>179.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>239.99</span></del>
									</span>
									<h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
								</a>
								<div class="techmarket-product-rating">
									<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div>
									<span class="review-count">(0)</span>
								</div>
								<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
							</div>
						</div>
					</div>
				</div><!-- .tab-featured-product -->
			</div><!-- .tab-product-carousel-with-featured-product -->
		</div><!-- .tab-pane -->

		<div role="tabpanel" id="digital-cameras" class="tab-pane">
			<div class="tab-product-carousel-with-featured-product">
				<div class="tab-carousel-products">
					<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-5">
								 @include($product_item);
							</div><!-- .woocommerce-->
						</div><!-- .container-fluid -->
					</div><!-- .products-carousel -->
				</div><!-- .tab-carousel-products -->

				<div class="tab-featured-product">
					<div class="woocommerce columns-1">
						<div class="products">
							<div class="tab-product-featured product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="/assets/images/products/featured-1.jpg">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>179.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>239.99</span></del>
									</span>
									<h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
								</a>
								<div class="techmarket-product-rating">
									<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div>
									<span class="review-count">(0)</span>
								</div>
								<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
							</div>
						</div>
					</div>
				</div><!-- .tab-featured-product -->
			</div><!-- .tab-product-carousel-with-featured-product -->
		</div><!-- .tab-pane -->

		<div role="tabpanel" id="action-cameras" class="tab-pane">
			<div class="tab-product-carousel-with-featured-product">
				<div class="tab-carousel-products">
					<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-5">
								@include($product_item);
							</div><!-- .woocommerce-->
						</div><!-- .container-fluid -->
					</div><!-- .products-carousel -->
				</div><!-- .tab-carousel-products -->

				<div class="tab-featured-product">
					<div class="woocommerce columns-1">
						<div class="products">
							<div class="tab-product-featured product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="/assets/images/products/featured.jpg">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>179.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>239.99</span></del>
									</span>
									<h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
								</a>
								<div class="techmarket-product-rating">
									<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div>
									<span class="review-count">(0)</span>
								</div>
								<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
							</div>
						</div>
					</div>
				</div><!-- .tab-featured-product -->
			</div><!-- .tab-product-carousel-with-featured-product -->
		</div><!-- .tab-pane -->

		<div role="tabpanel" id="compacts" class="tab-pane">
			<div class="tab-product-carousel-with-featured-product">
				<div class="tab-carousel-products">
					<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-5">
								@include($product_item);
							</div><!-- .woocommerce-->
						</div><!-- .container-fluid -->
					</div><!-- .products-carousel -->
				</div><!-- .tab-carousel-products -->

				<div class="tab-featured-product">
					<div class="woocommerce columns-1">
						<div class="products">
							<div class="tab-product-featured product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="/assets/images/products/featured-1.jpg">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>179.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>239.99</span></del>
									</span>
									<h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
								</a>
								<div class="techmarket-product-rating">
									<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div>
									<span class="review-count">(0)</span>
								</div>
								<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
							</div>
						</div>
					</div>
				</div><!-- .tab-featured-product -->
			</div><!-- .tab-product-carousel-with-featured-product -->
		</div><!-- .tab-pane -->
	</div><!-- .tab-content -->
</section><!-- .section-products-carousel-tabs-->
