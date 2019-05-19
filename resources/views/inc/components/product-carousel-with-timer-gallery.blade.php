<?php
	$wrapper_id        = 'techmarket-product-gallery-' . uniqid();

	$carousel_single_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> false,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		// 'asNavFor'          => '#' .  $wrapper_id . $i . ' .techmarket-wc-product-gallery-thumbnails__wrapper'
	);

	$carousel_gallery_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 3,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'vertical'			=> true,
		'verticalSwiping'	=> true,
		'focusOnSelect'		=> true,
		'touchMove'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-up"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-down"></i></a>',
		// 'asNavFor'          => '#' .  $wrapper_id . $i . ' .techmarket-wc-product-gallery__wrapper',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 767,
				'settings'		=> array(
					'vertical'			=> false,
					'verticalSwiping'	=> false,
					'slidesToShow'		=> 1
				)
			)
		)

	);


?>
<div class="products-carousel"  data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
	<div class="container-fluid">
		<div class="woocommerce columns-4">
			<div class="products">
					<?php for ($i=1; $i <=6; $i++) { ?>
					<?php
	                    if ( empty( $loop ) ) {
	                        $loop = 0;
	                    }
	                    $loop++;
	                    $classes = '';
	                    if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
	                        $classes = 'first';
	                    }
	                    if ( 0 === $loop % $column ) {
	                        $classes = 'last';
	                    }

						$carousel_single_args['asNavFor'] = '#' .  $wrapper_id . $i . ' .techmarket-wc-product-gallery-thumbnails__wrapper';
						$carousel_gallery_args['asNavFor'] = '#' .  $wrapper_id . $i . ' .techmarket-wc-product-gallery__wrapper';
	                ?>

					<div class="onsale-product-carousel-with-timer product <?php echo $classes; ?>">
						<div class="media">
							<div id="<?php echo $wrapper_id . $i; ?>" class="techmarket-product-gallery images">
								<figure class="techmarket-wc-product-gallery__wrapper gallery-wrapper-1" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">
									<figure class="techmarket-wc-product-gallery__image">
										<img width="600" height="600" alt="" class="wp-post-image" src="/assets/images/products/deals-1.jpg">
									</figure>

									<figure class="techmarket-wc-product-gallery__image">
										<img width="600" height="600" alt="" class="wp-post-image" src="/assets/images/products/deals-2.jpg">
									</figure>

									<figure class="techmarket-wc-product-gallery__image">
										<img width="600" height="600" alt="" class="wp-post-image" src="/assets/images/products/deals-3.jpg">
									</figure>

									<figure class="techmarket-wc-product-gallery__image">
										<img width="600" height="600" alt="" class="wp-post-image" src="/assets/images/products/deals-2.jpg">
									</figure>

								</figure><!-- /.techmarket-wc-product-gallery__wrapper -->

								<figure class="techmarket-wc-product-gallery-thumbnails__wrapper thumbnail-wrapper-1" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">

									<figure class="techmarket-wc-product-gallery__image">
										<img width="180" height="180" title="" alt="" class="wp-post-image" src="/assets/images/products/deals-sm-1.jpg">
									</figure>

									<figure class="techmarket-wc-product-gallery__image">
										<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/deals-sm-2.jpg">
									</figure>

									<figure class="techmarket-wc-product-gallery__image">
										<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/deals-sm-3.jpg">
									</figure>

									<figure class="techmarket-wc-product-gallery__image">
										<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/deals-sm-2.jpg">
									</figure>
								</figure><!-- /.techmarket-wc-product-gallery-thumbnails__wrapper -->
							</div><!-- /.techmarket-product-gallery -->

							<div class="media-body">

								<span class="onsale"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>242.99</span></span>

								<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
									<span class="price">
										<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>627.99</span></ins>
										<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>939.99</span></del>
									</span>

									<h2 class="woocommerce-loop-product__title">55″ KU6470 6 Series UHD  Crystal Colour HDR Smart TV</h2>

									<div class="deal-progress">
										<div class="deal-stock">
											<div class="stock-sold">Already Sold: <strong>0</strong></div>
											<div class="stock-available">Available: <strong>10</strong></div>
										</div>
										<div class="progress">
											<span style="width:0%" class="progress-bar">0</span>
										</div>
									</div>
								</a>

								<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
							</div><!-- /.media-body -->
						</div><!-- /.media -->
					</div><!-- .onsale-product-carousel-with-timer product -->

				<?php } ?>
			</div>
		</div>
	</div>
</div>
