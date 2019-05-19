<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	if($page=='home-v2') {
		$column = 7;
		$carousel_args 	= array(
			'infinite'          => false,
			'slidesToShow'		=> 7,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#categories-carousel-3 .custom-slick-nav',
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
						'slidesToShow'		=> 5,
						'slidesToScroll'	=> 5
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesToShow'		=> 6,
						'slidesToScroll'	=> 6
					)
				)
			)
			
		);
	} else {
		$column = 6;
		$carousel_args 	= array(
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
						'slidesToShow'		=> 4,
						'slidesToScroll'	=> 4
					)
				)
			)
		);
	}
?>

<section class="section-top-categories section-categories-carousel" id="categories-carousel-3">
	<header class="section-header">
		<h2 class="section-title">Top <br>categories <br>this week</h2>

		<?php if( $page=='home-v6' || $page=='home-v14' ) : ?>
			<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
		<?php  endif; ?>

		<?php if( $page=='home-v2' ) : ?>
			<a class="readmore-link" href="#">Full Catalog</a>
		<?php  endif; ?>

	</header><!-- .section-header -->

	<div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">

		<div class="woocommerce columns-<?php echo $column; ?>">
			<div class="products">
				<?php if( $page=='home-v6' || $page=='home-v2' ) : ?>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Fashion" src="/assets/images/category/sm-1.png"> <h2 class="woocommerce-loop-category__title"> All in One PC  </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Footwear" src="/assets/images/category/sm-2.png"> <h2 class="woocommerce-loop-category__title"> Audio & Music  </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Furnitures" src="/assets/images/category/sm-3.png"> <h2 class="woocommerce-loop-category__title"> Cells & Tablets  </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Perfumes" src="/assets/images/category/sm-4.png"> <h2 class="woocommerce-loop-category__title"> Computers & Laptops  </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Power Tools" src="/assets/images/category/sm-5.png"> <h2 class="woocommerce-loop-category__title"> Desktop PCs  </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Smart Appliances" src="/assets/images/category/sm-6.png"> <h2 class="woocommerce-loop-category__title"> Digital Cameras  </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Perfumes" src="/assets/images/category/sm-4.png"> <h2 class="woocommerce-loop-category__title"> Computers & Laptops  </h2></a></div>
				<?php  endif; ?>

				<?php if( $page=='home-v14' ) : ?>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Fashion" src="/assets/images/garden/cat-1.png"> <h2 class="woocommerce-loop-category__title">  Garden and Outdoors   </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Footwear" src="/assets/images/garden/cat-2.png"> <h2 class="woocommerce-loop-category__title">  Hammer Drills   </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Furnitures" src="/assets/images/garden/cat-3.png"> <h2 class="woocommerce-loop-category__title">  Home and Garden   </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Perfumes" src="/assets/images/garden/cat-4.png"> <h2 class="woocommerce-loop-category__title">  Home and Kitchen   </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Power Tools" src="/assets/images/garden/cat-5.png"> <h2 class="woocommerce-loop-category__title">  Mowers and Outdoor Power Tools  </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Smart Appliances" src="/assets/images/garden/cat-6.png"> <h2 class="woocommerce-loop-category__title">  Plant and Flower Pot   </h2></a></div>
					<div class="product-category product"><a href="{{route("category")}}"><img width="224" height="197" alt="Perfumes" src="/assets/images/garden/cat-7.png"> <h2 class="woocommerce-loop-category__title">  Power Tools  </h2></a></div>
				<?php  endif; ?>
			</div><!-- .products-->
		</div><!-- .woocommerce-->
	</div><!-- .product-categories -->
</section><!-- .section-top-categories -->