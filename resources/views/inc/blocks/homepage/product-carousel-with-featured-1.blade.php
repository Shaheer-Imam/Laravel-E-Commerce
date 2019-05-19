<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

		$tab_carousel_args = array(
			'infinite'          => false,
			'rows'				=> 2,
			'slidesPerRow'		=> 6,
			'slidesToShow'		=> 1,
			'slidesToScroll'	=> 1,
			'dots'				=> true,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 767,
					'settings'		=> array(
						'slidesPerRow'		=> 1,
						'slidesToScroll'	=> 1
					)
				),
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
	

  
?>

<section class="full-width section-products-carousel-tabs section-product-carousel-with-featured-product carousel-with-featured-1">
	<header class="section-header">
		<h2 class="section-title">Sports & Fitness</h2>
		<ul role="tablist" class="nav justify-content-center">
			<li class="nav-item"><a class="nav-link active" href="#top-20-1" data-toggle="tab">Top 20</a></li>
			<li class="nav-item"><a class="nav-link" href="#protein" data-toggle="tab">Protein</a></li>
			<li class="nav-item"><a class="nav-link" href="#acid" data-toggle="tab">Amino Acids</a></li>
			<li class="nav-item"><a class="nav-link" href="#energy" data-toggle="tab">Energy & Endurance</a></li>
		</ul>
	</header>

	<div class="tab-content">
		<div role="tabpanel" id="top-20-1" class="tab-pane active">
			<div class="tab-product-carousel-with-featured-product">
				<div class="tab-carousel-products">
					<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-5">
								<?php @include'inc/components/product-item-9'; ?>
							</div><!-- .woocommerce-->
						</div><!-- .container-fluid -->
					</div><!-- .products-carousel -->
				</div><!-- .tab-carousel-products -->

				<div class="tab-featured-product">
					<div class="woocommerce columns-1">
						<div class="products">
							<div class="tab-product-featured product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="/assets/images/organic/1.jpg">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>179.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>239.99</span></del>
									</span>
									<h2 class="woocommerce-loop-product__title">Ultima Replenisher Electrolyte Powder, New Formula Orange</h2>
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

		<div role="tabpanel" id="protein" class="tab-pane">
			<div class="tab-product-carousel-with-featured-product">
				<div class="tab-carousel-products">
					<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-6">
								<?php @include'inc/components/product-item-9'; ?>
							</div><!-- .woocommerce-->
						</div><!-- .container-fluid -->
					</div><!-- .products-carousel -->
				</div><!-- .tab-carousel-products -->

				<div class="tab-featured-product">
					<div class="woocommerce columns-1">
						<div class="products">
							<div class="tab-product-featured product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="/assets/images/organic/2.jpg">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>179.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>239.99</span></del>
									</span>
									<h2 class="woocommerce-loop-product__title">Coconut Lemon Bath and Shower Gel</h2>
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

		<div role="tabpanel" id="acid" class="tab-pane">
			<div class="tab-product-carousel-with-featured-product">
				<div class="tab-carousel-products">
					<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-6">
								<?php @include'inc/components/product-item-9'; ?>
							</div><!-- .woocommerce-->
						</div><!-- .container-fluid -->
					</div><!-- .products-carousel -->
				</div><!-- .tab-carousel-products -->

				<div class="tab-featured-product">
					<div class="woocommerce columns-1">
						<div class="products">
							<div class="tab-product-featured product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="/assets/images/organic/3.jpg">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>179.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>239.99</span></del>
									</span>
									<h2 class="woocommerce-loop-product__title">Avocado Oil Mayo</h2>
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

		<div role="tabpanel" id="energy" class="tab-pane">
			<div class="tab-product-carousel-with-featured-product">
				<div class="tab-carousel-products">
					<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						<div class="container-fluid">
							<div class="woocommerce columns-6">
								<?php @include'inc/components/product-item-9'; ?>
							</div><!-- .woocommerce-->
						</div><!-- .container-fluid -->
					</div><!-- .products-carousel -->
				</div><!-- .tab-carousel-products -->

				<div class="tab-featured-product">
					<div class="woocommerce columns-1">
						<div class="products">
							<div class="tab-product-featured product">
								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<img width="600" height="600" alt="" class="attachment-shop_single size-shop_single wp-post-image" src="/assets/images/organic/4.jpg">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>179.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>239.99</span></del>
									</span>
									<h2 class="woocommerce-loop-product__title">Sea Salt Seaweed Snack</h2>
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
