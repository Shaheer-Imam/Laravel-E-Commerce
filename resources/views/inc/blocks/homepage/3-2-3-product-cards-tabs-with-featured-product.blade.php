<?php
	$carousel_single_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> false,
		'asNavFor'          => '.techmarket-3-2-3-gallery .techmarket-wc-product-gallery-thumbnails__wrapper'
	);

	$productLabel = array(
		1 => array('product_label' => 'A+'),
		2 => array('product_label' => 'A++'),
		3 => array('product_label' => 'A+'),
		4 => array('product_label' => 'A++'),
		5 => array('product_label' => 'A'),
		6 => array('product_label' => 'A++'),
		7 => array('product_label' => 'A++'),
		8 => array('product_label' => 'A+'),
		9 => array('product_label' => 'A++'),
		10 => array('product_label' => 'A+'),
		11 => array('product_label' => 'A+'),
		12 => array('product_label' => 'A++'),
		13 => array('product_label' => 'A+')
	);
	$productName = array(
		1 => array('product_name' => '60UH6150 60-Inch 4K Ultra  HD Smart LED TV'),
		2 => array('product_name' => '55″ KU6470 6 Series UHD  Crystal Colour HDR Smart TV'),
		3 => array('product_name' => 'UN40H5003 40-Inch 1080p  LED TV with Backlight'),
		4 => array('product_name' => '65UH7700 65-Inch 4K Ultra  HD Smart LED TV'),
		5 => array('product_name' => '55UP130 55-Inch 4K Ultra HD  Roku Smart LED TV'),
		6 => array('product_name' => '55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D'),
		7 => array('product_name' => '55″ KU6470 6 Series UHD  Crystal Colour HDR Smart TV'),
		8 => array('product_name' => '55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D'),
		9 => array('product_name' => 'UN40H5003 40-Inch 1080p  LED TV with Backlight'),
		10 => array('product_name' => 'UN40H5003 40-Inch 1080p  LED TV with Backlight'),
		11 => array('product_name' => '55″ KU6470 6 Series UHD  Crystal Colour HDR Smart TV'),
		12 => array('product_name' => '60UH6150 60-Inch 4K Ultra  HD Smart LED TV'),
		13 => array('product_name' => '55UP130 55-Inch 4K Ultra HD  Roku Smart LED TV')
	);

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
		'asNavFor'          => '.techmarket-3-2-3-gallery .techmarket-wc-product-gallery__wrapper',
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

<section class="section-3-2-3-product-cards-tabs-with-featured-product stretch-full-width">
	<div class="col-full">
		<header class="section-header">
			<h2 class="section-title">Hurry up!<span> Special Offers</span></h2>
				<ul role="tablist" class="nav justify-content-center">
					<li class="nav-item"><a class="nav-link" href="#cameras" data-toggle="tab">Cameras</a></li>
					<li class="nav-item"><a class="nav-link" href="#audio" data-toggle="tab">Audio</a></li>
					<li class="nav-item"><a class="nav-link" href="#gps" data-toggle="tab">GPS &amp; Navigation</a></li>
					<li class="nav-item"><a class="nav-link active" href="#tv-video" data-toggle="tab">TV &amp; Video</a></li>
					<li class="nav-item"><a class="nav-link" href="#cell-phones" data-toggle="tab">Cell Phones</a></li>
					<li class="nav-item"><a class="nav-link" href="#computers" data-toggle="tab">Computers</a></li>
					<li class="nav-item"><a class="nav-link" href="#accessories" data-toggle="tab">Accessories</a></li>
				</ul>
		</header><!-- .section-header -->

		<div class="tab-content">
			<div id="cameras" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									 @include('inc.components.landscape-product-card-item') 
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="/assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="/assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">X930E Series 65” 4K Ultra Slim HD  High Dynamic Range 3D</h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>Picture Quality Index:1300</li>
														<li>64.5″ screen (measured diagonally from corner to corner)</li>
														<li>Built-in Wi-Fi Smart TV means a huge world of entertainment</li>
														<li>LED TVs perform well in all lighting conditions</li>
														<li>2160p resolution for breathtaking HD images</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
													<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="{{route("product")}}">

														<span class="price">
										                    <ins><span class="amount"> $939.99</span></ins>
										                    <del><span class="amount">$627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="{{route("cart")}}" >Add to cart</a>
														<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									@include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="audio" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									@include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="/assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="/assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">X930E Series 65” 4K Ultra Slim HD  High Dynamic Range 3D</h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>Picture Quality Index:1300</li>
														<li>64.5″ screen (measured diagonally from corner to corner)</li>
														<li>Built-in Wi-Fi Smart TV means a huge world of entertainment</li>
														<li>LED TVs perform well in all lighting conditions</li>
														<li>2160p resolution for breathtaking HD images</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
													<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="{{route("product")}}">

														<span class="price">
										                    <ins><span class="amount"> $939.99</span></ins>
										                    <del><span class="amount">$627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="{{route("cart")}}" >Add to cart</a>
														<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									 @include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="gps" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									@include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="/assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="/assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">X930E Series 65” 4K Ultra Slim HD  High Dynamic Range 3D</h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>Picture Quality Index:1300</li>
														<li>64.5″ screen (measured diagonally from corner to corner)</li>
														<li>Built-in Wi-Fi Smart TV means a huge world of entertainment</li>
														<li>LED TVs perform well in all lighting conditions</li>
														<li>2160p resolution for breathtaking HD images</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
													<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="{{route("product")}}">

														<span class="price">
										                    <ins><span class="amount"> $939.99</span></ins>
										                    <del><span class="amount">$627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="{{route("cart")}}" >Add to cart</a>
														<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									@include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="tv-video" class="tab-pane active" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									 @include('inc.components.landscape-product-card-item') 
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="/assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="/assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">X930E Series 65” 4K Ultra Slim HD  High Dynamic Range 3D</h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>Picture Quality Index:1300</li>
														<li>64.5″ screen (measured diagonally from corner to corner)</li>
														<li>Built-in Wi-Fi Smart TV means a huge world of entertainment</li>
														<li>LED TVs perform well in all lighting conditions</li>
														<li>2160p resolution for breathtaking HD images</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
													<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="{{route("product")}}">

														<span class="price">
										                    <ins><span class="amount"> $939.99</span></ins>
										                    <del><span class="amount">$627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="{{route("cart")}}" >Add to cart</a>
														<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									@include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="cell-phones" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									@include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="/assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="/assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">X930E Series 65” 4K Ultra Slim HD  High Dynamic Range 3D</h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>Picture Quality Index:1300</li>
														<li>64.5″ screen (measured diagonally from corner to corner)</li>
														<li>Built-in Wi-Fi Smart TV means a huge world of entertainment</li>
														<li>LED TVs perform well in all lighting conditions</li>
														<li>2160p resolution for breathtaking HD images</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
													<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="{{route("product")}}">

														<span class="price">
										                    <ins><span class="amount"> $939.99</span></ins>
										                    <del><span class="amount">$627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="{{route("cart")}}" >Add to cart</a>
														<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									 @include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="computers" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									 @include('inc.components.landscape-product-card-item') 
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="/assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="/assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">X930E Series 65” 4K Ultra Slim HD  High Dynamic Range 3D</h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>Picture Quality Index:1300</li>
														<li>64.5″ screen (measured diagonally from corner to corner)</li>
														<li>Built-in Wi-Fi Smart TV means a huge world of entertainment</li>
														<li>LED TVs perform well in all lighting conditions</li>
														<li>2160p resolution for breathtaking HD images</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
													<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="{{route("product")}}">

														<span class="price">
										                    <ins><span class="amount"> $939.99</span></ins>
										                    <del><span class="amount">$627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="{{route("cart")}}" >Add to cart</a>
														<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									 @include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->

			<div id="accessories" class="tab-pane" role="tabpanel">
				<div class="product-cards-3-2-3-with-featured-product">
					<div class="row">
						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									 @include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>

						<div class="products-3-with-featured">
							<div class="woocommerce columns-1">
								<div class="products">
									<div class="landscape-product-card-featured product">
										<div class="media">
											<div class="techmarket-product-gallery images techmarket-3-2-3-gallery">
												<figure class="techmarket-wc-product-gallery__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image1" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-2.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image2" src="/assets/images/products/big-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
													
														<img width="600" height="600" title="" alt="" class="wp-post-image3" src="/assets/images/products/big-card.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image" data-thumb="assets/images/products/big-card-1.jpg">
														<img width="600" height="600" title="" alt="" class="wp-post-image" src="/assets/images/products/big-card-2.jpg">
													</figure>

												</figure>

												<figure class="techmarket-wc-product-gallery-thumbnails__wrapper" data-ride="tm-slick-carousel" data-wrap=".techmarket-wc-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>">
													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-1.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-2.jpg">
													</figure>

													<figure class="techmarket-wc-product-gallery__image">
														<img width="180" height="180" title="" alt="" class="attachment-shop_thumbnail size-shop_thumbnail" src="/assets/images/products/sm-card-3.jpg">
													</figure>
												</figure>
											</div>

											<div class="media-body">
												<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
													<span class="price">
														<ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,499.99</span></ins>
														<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4,129.99</span></del>
													</span>
													<h2 class="woocommerce-loop-product__title">X930E Series 65” 4K Ultra Slim HD  High Dynamic Range 3D</h2>
													<div class="ribbon green-label"><span>A+</span></div>
													<div class="techmarket-product-rating">
														<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
													</div>
												</a>
												<div class="woocommerce-product-details__short-description">
													<ul>
														<li>Picture Quality Index:1300</li>
														<li>64.5″ screen (measured diagonally from corner to corner)</li>
														<li>Built-in Wi-Fi Smart TV means a huge world of entertainment</li>
														<li>LED TVs perform well in all lighting conditions</li>
														<li>2160p resolution for breathtaking HD images</li>
													</ul>
												</div>
													<a class="button add_to_cart_button" href="{{route("cart")}}">Add to cart</a>
													<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
											</div>
										</div>
									</div>

									<?php for ($i=1; $i <=2; $i++) { ?>
										<div class="landscape-product-card product">
											<div class="media">
												<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
													<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
												</a>

												<div class="media-body">
													<a class="woocommerce-LoopProduct-link " href="{{route("product")}}">

														<span class="price">
										                    <ins><span class="amount"> $939.99</span></ins>
										                    <del><span class="amount">$627.99</span></del>
										            	</span><!-- .price -->

														<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

														<div class="ribbon green-label">
															<span><?php echo $productLabel[$i]['product_label'] ?></span>
														</div>

														<div class="techmarket-product-rating">
															<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
															</div>
															<span class="review-count">(0)</span>
														</div><!-- .techmarket-product-rating -->
													</a>

													<div class="hover-area">
														<a class="button add_to_cart_button" href="{{route("cart")}}" >Add to cart</a>
														<a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
													</div><!-- .hover-area -->
												</div><!-- .media-body -->
											</div><!-- .media -->
										</div><!-- .woocommerce-LoopProduct-link -->
									<?php } ?>
								</div>
							</div>
						</div>

						<div class="products-3">
							<div class="woocommerce columns-1">
								<div class="products">
									@include('inc.components.landscape-product-card-item')
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .products -->


		</div><!-- .tab-content -->
	</div><!-- .col-full -->
</section><!-- .section-3-2-3-product-cards-tabs-with-featured-product -->
