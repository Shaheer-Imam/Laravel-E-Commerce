<?php

	$carousel_single_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> false,
		'asNavFor'          => '#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper'
	);
	
	$carousel_gallery_args = array(
		'infinite'			=> false,
		'slidesToShow'		=> 4,
		'slidesToScroll'    => 1,
		'dots'				=> false,
		'arrows'			=> true,
		'vertical'			=> true,
		'verticalSwiping'	=> true,
		'focusOnSelect'		=> true,
		'touchMove'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-up"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-down"></i></a>',
		'asNavFor'          => '#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper',
		'responsive'		=> array(
			
			array(
				'breakpoint'	=> 765,
				'settings'		=> array(
					'vertical'			=> false,
					'horizontal'		=> true,
					'verticalSwiping'	=> false,
					'slidesToShow'		=> 4
				)
			)
			
		)

	);


?>


<div class="product-images-wrapper thumb-count-4"> 
	@if (!empty($product->product_discounted_price))
	<span class="onsale">-
		<span class="woocommerce-Price-amount amount">
			<span class="woocommerce-Price-currencySymbol">$</span>{{$product->product_discounted_price}}</span>
	</span>
	@endif
	<!-- .onsale -->

	<div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
		<div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_single_args ), ENT_QUOTES, 'UTF-8' ); ?>">
			<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
				<a href="#" class="woocommerce-product-gallery__trigger">🔍</a> 
				<figure class="woocommerce-product-gallery__wrapper ">
				
				@if (count($productImage) > 0)
				@foreach ($productImage as $item)
				<div data-thumb="{{$item->product_image_url}}" class="woocommerce-product-gallery__image">
					<a href="{{$item->product_image_url}}" tabindex="0">
						<img width="600" height="600" src="{{$item->product_image_url}}"
							class="attachment-shop_single size-shop_single wp-post-image"
							alt="">
					</a>
				</div>
				@endforeach
				@else
				<div data-thumb="/no-image-icon-33.png" class="woocommerce-product-gallery__image">
					<a href="/no-image-icon-33.png" tabindex="0">
						<img width="600" height="600" src="/no-image-icon-33.png"
							class="attachment-shop_single size-shop_single wp-post-image"
							alt="">
					</a>
				</div>
				@endif

			
				</figure>
			</div><!-- .woocommerce-product-gallery -->
		</div><!-- .techmarket-single-product-gallery-images -->

		<div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_gallery_args ), ENT_QUOTES, 'UTF-8' ); ?>"> 
			<figure class="techmarket-single-product-gallery-thumbnails__wrapper">
			 
				@if (count($productImage) > 0)
				@foreach ($productImage as $item)
				<figure data-thumb="{{$item->product_image_url}}" class="techmarket-wc-product-gallery__image">
					<img width="180" height="180" src="{{$item->product_image_url}}"
						class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
				</figure>
				@endforeach
				@else
				<figure data-thumb="/no-image-icon-33.png" class="techmarket-wc-product-gallery__image">
					<img width="180" height="180" src="/no-image-icon-33.png" class="attachment-shop_thumbnail size-shop_thumbnail"
						alt="">
				</figure>
				@endif
			</figure><!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
		</div><!-- .techmarket-single-product-gallery-thumbnails -->
	</div><!-- .techmarket-single-product-gallery -->
</div><!-- .product-images-wrapper -->