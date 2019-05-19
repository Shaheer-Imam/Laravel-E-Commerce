<?php
	
	$carousel_args 	= array(
		'infinite'          => false,
		'slidesToShow'		=> 5,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#categories-carousel-1 .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 480,
				'settings'		=> array(
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			)
		)

				
	);
	

?>

<section class="section-top-categories section-categories-carousel" id="categories-carousel-1">
	<header class="section-header">
		<h4 class="pre-title">Featured</h4>
		<h2 class="section-title">Top categories <br>this week</h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
		<a class="readmore-link" href="#">Full Catalog</a>
	</header><!-- .section-header -->

	<div class="product-categories-1 product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="woocommerce columns-5">
			<div class="products">

				<div class="product-category product first">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="All in One PC" src="/assets/images/organic/cat-1.png">
						<h2 class="woocommerce-loop-category__title">
							 Beauty &amp; Personal Care 
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Audio &amp; Music" src="/assets/images/organic/cat-2.png">
						<h2 class="woocommerce-loop-category__title">
							Food &amp; Bevereages 
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Cells &amp; Tablets" src="/assets/images/organic/cat-3.jpg">
						<h2 class="woocommerce-loop-category__title">
							 Herbs &amp; Botanicals 
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Computers &amp; Laptops" src="/assets/images/organic/cat-4.png">
						<h2 class="woocommerce-loop-category__title">
							 Sports &amp; Fitness 
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product last">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Desktop PCs" src="/assets/images/organic/cat-5.png">
						<h2 class="woocommerce-loop-category__title">
							 Supplements 
						</h2>
					</a>
				</div><!-- .product-category -->

				
			</div><!-- .products -->
		</div><!-- .woocommerce -->
	</div><!-- .product-categories-carousel -->
</section><!-- .section-categories-carousel -->
