<?php
	$wrapper_id        = 'techmarket-product-gallery-' . uniqid();

	$carousel_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 2,
		'slidesToScroll'	=> 2,
		'dots'				=> true,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#section-products-carousel-6 .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 1590,
				'settings'		=> array(
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			)
		)
	);

	$carousel_single_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> false,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		//'asNavFor'          => '#' .  $wrapper_id . ' .techmarket-wc-product-gallery-thumbnails__wrapper'
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
		//'asNavFor'          => '#' .  $wrapper_id . ' .techmarket-wc-product-gallery__wrapper',
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

<section id="section-products-carousel-6" class="section-landscape-products-carousel section-landscape-products-carousel-with-thumbnails">
	<header class="section-header">
		<h2 class="section-title">Electronic Lawnmowers</h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
	</header><!-- .section-header -->


	<div class="products-carousel landscape-featured-product"  data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="container-fluid">
			<div class="woocommerce columns-2">
				<div class="products">
					<?php for ($i=1; $i < 6; $i++) { ?>
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

		                <div class="landscape-product-card-featured product" style="width: 733px;">
		                	<div class="media">	
								
		                		<div id="<?php echo $wrapper_id . $i; ?>" class="techmarket-product-gallery techmarket-product-gallery--with-images techmarket-product-gallery--columns-4 images" data-columns="4">
		                			<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		                				<figure class="techmarket-wc-product-gallery__image">
											<img width="600" height="600" src="/assets/images/garden/deal-1.jpg" alt="gallery-image">
										</figure>

										<figure class="techmarket-wc-product-gallery__image">
											<img width="600" height="600" title="" alt="" class="attachment-shop_single size-shop_single" src="/assets/images/garden/deal-2.jpg">
										</figure>

										<figure class="techmarket-wc-product-gallery__image">
											<img width="600" height="600"  title="" alt="" class="attachment-shop_single size-shop_single" src="/assets/images/garden/deal-3.jpg">
										</figure>

										<figure class="techmarket-wc-product-gallery__image">
											<img width="600" height="600" title="" alt="" class="attachment-shop_single size-shop_single" src="/assets/images/garden/deal-4.jpg">
										</figure>
										
									</figure><!-- /.techmarket-wc-product-gallery__wrapper -->

									<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>"> 
									
										<figure class="techmarket-wc-product-gallery__image">
											<img width="180" height="180" title="" alt="" class="wp-post-image" src="/assets/images/garden/d-1.jpg">
										</figure>

										<figure class="techmarket-wc-product-gallery__image">
											<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/garden/d2.jpg">
										</figure>

										<figure class="techmarket-wc-product-gallery__image">
											<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/garden/d3.jpg">
										</figure>

										<figure class="techmarket-wc-product-gallery__image">
											<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/garden/d4.jpg">
										</figure>
									</figure><!-- /.techmarket-wc-product-gallery-thumbnails__wrapper -->
								</div><!-- /.techmarket-product-gallery -->

	            				<div class="media-body">
	            					<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
	            						<span class="price"><ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins> <del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del></span>
	            						<h2 class="woocommerce-loop-product__title">X930E Series 65” 4K Ultra Slim HD  High Dynamic Range 3D</h2>
	            						<div class="ribbon green-label"><span>A+</span></div>
	            						<div class="techmarket-product-rating">
	                						<div class="star-rating" title="Rated 0 out of 5">
	                							<span style="width:0%"><strong class="rating">0</strong> out of 5</span>
	                						</div> 
	                						<span class="review-count">(0)</span>
	                					</div>
	            					</a>
	            					<a rel="nofollow" href="{{route("cart")}}" class="button product_type_simple">Add to cart</a>
	            					<a href="index?page=compare" class="add-to-compare-link">Add to compare</a>
	            				</div><!-- /.media-body -->
		                	</div><!-- /.media -->
		                </div><!-- /.landscape-product-card-featured -->
	             	<?php } ?>
                </div><!-- .products -->
            </div><!-- .woocommerce -->

        </div><!-- .container-fluid -->
    </div><!-- .products-carousel -->
</section><!-- .section-landscape-products-carousel -->