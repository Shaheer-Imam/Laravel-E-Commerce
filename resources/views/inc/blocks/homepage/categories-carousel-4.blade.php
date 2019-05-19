<?php
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 6,
		'slidesToScroll'	=> 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#categories-carousel-3 .custom-slick-nav',
		'responsive'		=> array(
			array(
				'breakpoint'	=> 779,
				'settings'		=> array(
					'slidesToShow'		=> 2,
					'slidesToScroll'	=> 2
				)
			),
			array(
				'breakpoint'	=> 780,
				'settings'		=> array(
					'slidesToShow'		=> 3,
					'slidesToScroll'	=> 3
				)
			),
			array(
				'breakpoint'	=> 1200,
				'settings'		=> array(
					'slidesToShow'		=> 4,
					'slidesToScroll'	=> 4
				)
			),
			array(
				'breakpoint'	=> 1400,
				'settings'		=> array(
					'slidesToShow'		=> 5,
					'slidesToScroll'	=> 5
				)
			)
		)
	);
?>

<section class="categorie_carousel_2 section-categories-carousel" id="categories-carousel-3">
	<header class="section-header">
		<h2 class="section-title">Computers & Laptops Categories</h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
	</header><!-- .section-header -->

	<div class="product-categories-carousel product-categories-3" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="woocommerce columns-6">
			<div class="products">
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-1.png"> 
						<h2 class="woocommerce-loop-category__title">All in One PC </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-2.png"> 
						<h2 class="woocommerce-loop-category__title">Audio &amp; Music </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-3.png"> 
						<h2 class="woocommerce-loop-category__title">Cells &amp; Tablets </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-4.png"> 
						<h2 class="woocommerce-loop-category__title">Computers &amp; Laptops </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-5.png"> 
						<h2 class="woocommerce-loop-category__title">Desktop PCs </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-6.png"> 
						<h2 class="woocommerce-loop-category__title">Digital Cameras </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-7.png"> 
						<h2 class="woocommerce-loop-category__title">Games &amp; Consoles </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-5.png"> 
						<h2 class="woocommerce-loop-category__title">Headphones </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-1.png"> 
						<h2 class="woocommerce-loop-category__title">Home Entertainment </h2>
					</a>
				</div>
				<div class="product-category product">
					<a href="{{route("category")}}">
						<img width="224" height="197" alt="" src="/assets/images/category/sm-3.png"> 
						<h2 class="woocommerce-loop-category__title">Home Theater &amp; Audio </h2>
					</a>
				</div>
			</div><!-- .products-->
		</div><!-- .woocommerce -->
	</div>
</section><!-- .section-top-categories -->