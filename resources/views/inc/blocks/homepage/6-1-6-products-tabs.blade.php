  @include('inc/components/product-image');

 <?php

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
		if($page=='home-v2') {
		$column = 3;
	}
	$productImage = array(
		1 => array('product_image' => 'assets/images/products/sm-1.jpg'),
		2 => array('product_image' => 'assets/images/products/sm-2.jpg'),
		3 => array('product_image' => 'assets/images/products/sm-3.jpg'),
		4 => array('product_image' => 'assets/images/products/sm-4.jpg'),
		5 => array('product_image' => 'assets/images/products/xs-1.jpg'),
		6 => array('product_image' => 'assets/images/products/xs-2.jpg'),
		7 => array('product_image' => 'assets/images/products/xs-3.jpg'),
		8 => array('product_image' => 'assets/images/products/xs-4.jpg'),
		9 => array('product_image' => 'assets/images/products/xs-5.jpg'),
		10 => array('product_image' => 'assets/images/products/xs-6.jpg'),
		11 => array('product_image' => 'assets/images/products/sm-2.jpg'),
		12 => array('product_image' => 'assets/images/products/sm-4.jpg'),
		13 => array('product_image' => 'assets/images/products/sm-3.jpg'),
		14 => array('product_image' => 'assets/images/products/xs-3.jpg'),
		15 => array('product_image' => 'assets/images/products/xs-4.jpg'),
		16 => array('product_image' => 'assets/images/products/xs-5.jpg')
	);
?>
	<section class="section-6-1-6-products-tabs">
		<header class="section-header">
			<h2 class="section-title">Daily Deals! <span>Get our best prices.</span></h2>
		</header><!-- /.section-header -->

		<div class="6-1-6-products-tabs">
			<ul role="tablist" class="nav justify-content-center">
				<li class="nav-item"><a class="nav-link " href="#tab-30" data-toggle="tab">-30%</a></li>
				<li class="nav-item"><a class="nav-link active" href="#tab-50" data-toggle="tab">-50%</a></li>
				<li class="nav-item"><a class="nav-link " href="#tab-70" data-toggle="tab">-70%</a></li>
			</ul><!-- /.nav -->


			<div class="tab-content">
				<div id="tab-30" class="tab-pane" role="tabpanel">
					<div class="row row-6-1-6-products">
						<div class="product-1">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="sale-product-with-timer product">
										 
										<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
											<div class="sale-product-with-timer-header">
												<div class="price-and-title">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>425.89</span>
														</ins> 
														<del><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>545.89</span>
														</del>
													</span><!-- /.price -->

													<h2 class="woocommerce-loop-product__title">Tablet Red EliteBook Revolve</h2>
												</div><!-- /.price-and-title -->

												<div class="sale-label-outer">
													<div class="sale-saved-label">
														<span class="saved-label-text">Save</span>
														<span class="saved-label-amount">
															<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
														</span>
													</div><!-- /.sale-saved-label -->
												</div><!-- /.sale-label-outer -->
											</div><!-- /.sale-product-with-timer-header -->

											<img width="224" height="197" alt="" class="wp-post-image" src="/assets/images/products/6-1-6-center.jpg">

											<div class="deal-progress">
												<div class="deal-stock">
													<div class="stock-sold">Already Sold: <strong>0</strong></div>
													<div class="stock-available">Available: <strong>1000</strong></div>
												</div><!-- /.deal-stock -->

												<div class="progress">
													<span style="width:0%" class="progress-bar">0</span>
												</div><!-- /.progress -->
											</div><!-- /.deal-progress -->

											<div class="deal-countdown-timer">
												<div class="marketing-text">
													<span class="line-1">Hurry up!</span>
													<span class="line-2">Offers ends in:</span>
												</div><!-- /.marketing-text -->

												<span style="display:none;" class="deal-time-diff">29994</span>
												<div class="deal-countdown countdown"></div>
											</div><!-- /.deal-countdown-timer -->
										</a><!-- /.woocommerce-LoopProduct-link -->
									</div><!-- /.sale-product-with-timer -->
								</div><!-- /.products -->
							</div><!-- /.woocommerce -->
						</div><!-- /.product-1 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column;  ?>">
								<div class="products">
							
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
									        </div> 

											<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> $309.95</span></ins>
										            <del><span class="amount">$459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
										        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column;  ?>">
								<div class="products">
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
									        </div>     
											<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> $309.95</span></ins>
										            <del><span class="amount">$459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
										        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->
					</div><!-- /.product-1 -->
				</div><!-- /.tab-pane -->

				<div id="tab-50" class="tab-pane active" role="tabpanel">
					<div class="row row-6-1-6-products">
						<div class="product-1">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="sale-product-with-timer product">
										 
										<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
											<div class="sale-product-with-timer-header">
												<div class="price-and-title">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>425.89</span>
														</ins> 
														<del><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>545.89</span>
														</del>
													</span><!-- /.price -->

													<h2 class="woocommerce-loop-product__title">Tablet Red EliteBook Revolve</h2>
												</div><!-- /.price-and-title -->

												<div class="sale-label-outer">
													<div class="sale-saved-label">
														<span class="saved-label-text">Save</span>
														<span class="saved-label-amount">
															<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
														</span>
													</div><!-- /.sale-saved-label -->
												</div><!-- /.sale-label-outer -->
											</div><!-- /.sale-product-with-timer-header -->

											<img width="224" height="197" alt="" class="wp-post-image" src="/assets/images/products/1.jpg">

											<div class="deal-progress">
												<div class="deal-stock">
													<div class="stock-sold">Already Sold: <strong>0</strong></div>
													<div class="stock-available">Available: <strong>1000</strong></div>
												</div><!-- /.deal-stock -->

												<div class="progress">
													<span style="width:0%" class="progress-bar">0</span>
												</div><!-- /.progress -->
											</div><!-- /.deal-progress -->

											<div class="deal-countdown-timer">
												<div class="marketing-text">
													<span class="line-1">Hurry up!</span>
													<span class="line-2">Offers ends in:</span>
												</div><!-- /.marketing-text -->

												<span style="display:none;" class="deal-time-diff">29994</span>
												<div class="deal-countdown countdown"></div>
											</div><!-- /.deal-countdown-timer -->
										</a><!-- /.woocommerce-LoopProduct-link -->
									</div><!-- /.sale-product-with-timer -->
								</div><!-- /.products -->
							</div><!-- /.woocommerce -->
						</div><!-- /.product-1 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column;  ?>">
								<div class="products">
							
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
									        </div>     
											<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> $309.95</span></ins>
										            <del><span class="amount">$459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
										        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column;  ?>">
								<div class="products">
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
									        </div>     
											<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> $309.95</span></ins>
										            <del><span class="amount">$459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
										        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->
					</div><!-- /.product-1 -->
				</div><!-- /.tab-pane -->

				<div id="tab-70" class="tab-pane" role="tabpanel">
					<div class="row row-6-1-6-products">
						<div class="product-1">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="sale-product-with-timer product">
										 
										<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
											<div class="sale-product-with-timer-header">
												<div class="price-and-title">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>425.89</span>
														</ins> 
														<del><span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>545.89</span>
														</del>
													</span><!-- /.price -->

													<h2 class="woocommerce-loop-product__title">Tablet Red EliteBook Revolve</h2>
												</div><!-- /.price-and-title -->

												<div class="sale-label-outer">
													<div class="sale-saved-label">
														<span class="saved-label-text">Save</span>
														<span class="saved-label-amount">
															<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">$</span>120.00</span>
														</span>
													</div><!-- /.sale-saved-label -->
												</div><!-- /.sale-label-outer -->
											</div><!-- /.sale-product-with-timer-header -->

											<img width="224" height="197" alt="" class="wp-post-image" src="/assets/images/products/6-1-6-center.jpg">

											<div class="deal-progress">
												<div class="deal-stock">
													<div class="stock-sold">Already Sold: <strong>0</strong></div>
													<div class="stock-available">Available: <strong>1000</strong></div>
												</div><!-- /.deal-stock -->

												<div class="progress">
													<span style="width:0%" class="progress-bar">0</span>
												</div><!-- /.progress -->
											</div><!-- /.deal-progress -->

											<div class="deal-countdown-timer">
												<div class="marketing-text">
													<span class="line-1">Hurry up!</span>
													<span class="line-2">Offers ends in:</span>
												</div><!-- /.marketing-text -->

												<span style="display:none;" class="deal-time-diff">29994</span>
												<div class="deal-countdown countdown"></div>
											</div><!-- /.deal-countdown-timer -->
										</a><!-- /.woocommerce-LoopProduct-link -->
									</div><!-- /.sale-product-with-timer -->
								</div><!-- /.products -->
							</div><!-- /.woocommerce -->
						</div><!-- /.product-1 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column;  ?>">
								<div class="products">
							
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
									        </div>     
											<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> $309.95</span></ins>
										            <del><span class="amount">$459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
										        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->

						<div class="products-6">
							<div class="woocommerce columns-<?php echo $column;  ?>">
								<div class="products">
									<?php for ($i=1; $i <=6; $i++) { ?>
										<div class="product"> 
											<div class="yith-wcwl-add-to-wishlist">
									            <a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
									        </div>     
											<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
										        <img src="<?php echo $productImage[$i]['product_image'] ?>" class="wp-post-image" alt="">

										        <span class="price">
										            <ins><span class="amount"> $309.95</span></ins>
										            <del><span class="amount">$459.99</span></del>
										        </span><!-- /.price -->

										        <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
										    </a>

										    <div class="hover-area">
										        <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
										        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
										    </div>
										</div><!-- /.product-outer -->
									<?php } ?>
								</div>
							</div>
						</div><!-- /.product-6 -->
					</div><!-- /.product-1 -->
				</div><!-- /.tab-pane -->
			</div><!-- /.tab-content -->
		</div><!-- /.6-1-6-products-tabs -->
	</section><!-- /.section-6-1-6-products-tabs -->