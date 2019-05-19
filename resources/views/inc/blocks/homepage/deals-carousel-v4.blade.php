<?php @include'inc/components/product-image-1'; ?>
<?php
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#sale-with-timer-carousel .custom-slick-nav'

	);
?>
<section class="column-1 deals-carousel" id="sale-with-timer-carousel">
	<div class="deals-carousel-inner-block">
		<header class="section-header">
			<h2 class="section-title"><strong>Deals</strong> of the week</h2>
			<nav class="custom-slick-nav"></nav>
		</header><!-- /.section-header -->

		<div class="sale-products-with-timer-carousel deals-carousel-v1">
			<div class="products-carousel">
				<div class="container-fluid">
					<div class="woocommerce columns-1">
						<div class="products" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
						 	<?php for ($i=1; $i <=4; $i++) { ?>
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

												<h2 class="woocommerce-loop-product__title">Banana Chia Superfood Hot Cereal</h2>
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

										<img width="224" height="197" alt="" class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">

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

											<span class="deal-time-diff" style="display:none;">28800</span>
											<div class="deal-countdown countdown"></div>
								
										</div><!-- /.deal-countdown-timer -->
									</a><!-- /.woocommerce-LoopProduct-link -->
								</div><!-- /.sale-product-with-timer -->
							 <?php } ?>
						</div><!-- /.products -->
					</div><!-- /.woocommerce -->
				</div><!-- /.container-fluid -->
			</div><!-- /.slick-list -->
		</div><!-- /.sale-products-with-timer-carousel -->

		<footer class="section-footer">
			<nav class="custom-slick-pagination">
				<a class="slider-prev left" href="#" data-target="#sale-with-timer-carousel .products"><i class="tm tm-arrow-left"></i>Previous deal</a>
				<a class="slider-next right" href="#" data-target="#sale-with-timer-carousel .products">Next deal<i class="tm tm-arrow-right"></i></a>
			</nav>
		</footer><!-- /.section-footer -->
	</div><!-- /.deals-carousel-inner-block -->
</section><!-- /.deals-carousel -->
