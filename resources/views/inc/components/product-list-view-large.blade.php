<?php
$productImage = array(
	1 => array('product_image' => 'assets/images/products/1.jpg'),
	2 => array('product_image' => 'assets/images/products/2.jpg'),
	3 => array('product_image' => 'assets/images/products/3.jpg'),
	4 => array('product_image' => 'assets/images/products/4.jpg'),
	5 => array('product_image' => 'assets/images/products/5.jpg'),
	6 => array('product_image' => 'assets/images/products/6.jpg'),
	7 => array('product_image' => 'assets/images/products/7.jpg'),
	8 => array('product_image' => 'assets/images/products/8.jpg'),
	9 => array('product_image' => 'assets/images/products/9.jpg'),
	10 => array('product_image' => 'assets/images/products/10.jpg'),
	11 => array('product_image' => 'assets/images/products/11.jpg'),
	12 => array('product_image' => 'assets/images/products/12.jpg'),
	13 => array('product_image' => 'assets/images/products/13.jpg'),
	14 => array('product_image' => 'assets/images/products/14.jpg'),
	15 => array('product_image' => 'assets/images/products/15.jpg'),
	16 => array('product_image' => 'assets/images/products/16.jpg'),
	17 => array('product_image' => 'assets/images/products/17.jpg'),
	18 => array('product_image' => 'assets/images/products/5.jpg'),
	19 => array('product_image' => 'assets/images/products/12.jpg'),
	20 => array('product_image' => 'assets/images/products/1.jpg'),
	21 => array('product_image' => 'assets/images/products/8.jpg'),
	22 => array('product_image' => 'assets/images/products/13.jpg'),
	23 => array('product_image' => 'assets/images/products/14.jpg'),
	24 => array('product_image' => 'assets/images/products/15.jpg'),
	25 => array('product_image' => 'assets/images/products/16.jpg'),
	);
?> 

<div class="woocommerce columns-1">
    <div class="products">
		@for ($i = 0; $i < 7; $i++)
			<div class="product list-view-large">
				<div class="media">
					<img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="https://images.unsplash.com/photo-1547185942-2b5661136b1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
					<div class="media-body">
						<div class="product-info">
							<div class="yith-wcwl-add-to-wishlist">
								<a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
							</div><!-- .yith-wcwl-add-to-wishlist --> 
						
							<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
								<h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2>
								<div class="techmarket-product-rating">
									<div title="Rated 5.00 out of 5" class="star-rating">
										<span style="width:100%"><strong class="rating">5.00</strong> out of 5</span>
									</div> 
									<span class="review-count">(1)</span>
								</div>
							</a><!-- .woocommerce-LoopProduct-link -->

							<div class="brand">
								<a href="#">
								<img alt="galaxy" src="/assets/images/brands/5.png"></a>
							</div><!-- .brand -->

							<div class="woocommerce-product-details__short-description">
								<ul>
									<li>CUJO smart firewall brings business-level Internet security to protect all of your home devices</li>
									<li>Internet Security: Guard your network and smart devices against hacks, malware, and cyber threats</li>
									<li>Mobile App: Monitor your wired and wireless network activity with a sleek iPhone or Android app</li>
									<li>CUJO connects to your wireless router with an ethernet cable. CUJO is not compatible with Luma and does not support Google Wifi Mesh. CUJO works with Eero in Bridge mode.</li>
								</ul>
							</div><!-- .woocommerce-product-details__short-description -->

							<span class="sku_wrapper">SKU: <span class="sku">5487FB8/13</span></span>
						</div><!-- .product-info -->

						<div class="product-actions">
							<div class="availability">
								Availability: 
								<p class="stock in-stock">1000 in stock</p>
							</div>
							
							<span class="price">
								<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
							</span><!-- .price -->

							<a class="button add_to_cart_button" href="{{route("cart")}}">Add to Cart</a>

							<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
						</div><!-- .product-actions -->
					</div><!-- .media-body -->
				</div><!-- .media -->
			</div><!-- .product -->
		@endfor
	

    </div><!-- .products -->
</div><!-- .woocommerce -->

