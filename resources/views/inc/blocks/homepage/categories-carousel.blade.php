<?php
$page='home-v1';
	if($page=='home-v1') {
		$carousel_args 	= array(
			'slidesToShow'		=> 5,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#categories-carousel-1 .custom-slick-nav',
			'responsive'		=> array(
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

		$column = '5';
	}

	else if($page=='home-v5') {
		$carousel_args 	= array(
			'infinite'          => false,
			'slidesToShow'		=> 4,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#categories-carousel-1 .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 750,
					'settings'		=> array(
						'slidesToShow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
				array(
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesToShow'		=> 3,
						'slidesToScroll'	=> 3
					)
				),
				array(
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesToShow'		=> 3,
						'slidesToScroll'	=> 3
					)
				)
			)
			
		);
		$column = '4';
	}

?>

<section class="section-top-categories section-categories-carousel" id="categories-carousel-1">
	<header class="section-header">
		<h4 class="pre-title">Featured</h4>
		<h2 class="section-title">Top categories <br>this week</h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
		<a class="readmore-link" href="#">Full Catalog</a>
	</header><!-- .section-header -->

	<div class="product-categories-1 product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="woocommerce columns-<?php echo $column; ?>">
			<div class="products">

				<div class="product-category product first">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="All in One PC" src="/assets/images/category/16.png">
						<h2 class="woocommerce-loop-category__title">
							All in One PC
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Audio &amp; Music" src="/assets/images/category/17.png">
						<h2 class="woocommerce-loop-category__title">
							Audio &amp; Music
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Cells &amp; Tablets" src="/assets/images/category/18.png">
						<h2 class="woocommerce-loop-category__title">
							Cells &amp; Tablets
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Computers &amp; Laptops" src="/assets/images/category/19.png">
						<h2 class="woocommerce-loop-category__title">
							Computers &amp; Laptops
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product last">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Desktop PCs" src="/assets/images/category/20.png">
						<h2 class="woocommerce-loop-category__title">
							Desktop PCs
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product first">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Digital Cameras" src="/assets/images/category/21.png">
						<h2 class="woocommerce-loop-category__title">
							Digital Cameras
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Games &amp; Consoles" src="/assets/images/category/22.png">
						<h2 class="woocommerce-loop-category__title">
							Games &amp; Consoles
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Headphones" src="/assets/images/category/23.png">
						<h2 class="woocommerce-loop-category__title">
							Headphones
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Home Entertainment" src="/assets/images/category/24.png">
						<h2 class="woocommerce-loop-category__title">
							Home Entertainment
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product last">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Home Theater &amp; Audio" src="/assets/images/category/25.png">
						<h2 class="woocommerce-loop-category__title">
							Home Theater &amp; Audio
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product first">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Laptops" src="/assets/images/category/18.png">
						<h2 class="woocommerce-loop-category__title">
							Laptops
						</h2>
					</a>
				</div><!-- .product-category -->

				<div class="product-category product">
					<a href="{{route("category")}}">
					<img width="224" height="197" alt="Mac Computers" src="/assets/images/category/22.png">
						<h2 class="woocommerce-loop-category__title">
							Mac Computers
						</h2>
					</a>
				</div><!-- .product-category -->
			</div><!-- .products -->
		</div><!-- .woocommerce -->
	</div><!-- .product-categories-carousel -->
</section><!-- .section-categories-carousel -->
