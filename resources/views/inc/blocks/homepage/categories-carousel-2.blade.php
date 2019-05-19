<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

    if($page=='home-v6') {
		$column = 6;
		$section_title = 'Top <br>categories <br>this week';
		$section_class = 'section-top-categories section-categories-carousel-v1 section-categories-carousel';
		$div_class = 'product-categories';
	}

	if($page=='home-v12') {
		$column = 7;
		$section_title = 'Top <br>categories <br>this week';
		$section_class = 'section-top-categories section-categories-carousel-v1 section-categories-carousel';
		$div_class = 'product-categories';

		$carousel_args 	= array(
			'infinite'          => false,
			'slidesToShow'		=> 7,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#categories-carousel-2 .custom-slick-nav',
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
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesToShow'		=> 5,
						'slidesToScroll'	=> 5
					)
				)
			)
		);
	}

	else if($page=='home-v3') {
		$column = 8;
		$section_title = 'Featured categories';
		$section_class = 'section-categories-carousel';
		$carousel_args 	= array(
			'infinite'          => false,
			'slidesToShow'		=> 8,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#categories-carousel-2 .custom-slick-nav',
			'responsive'		=> array(
				array(
					'breakpoint'	=> 480,
					'settings'		=> array(
						'slidesToShow'		=> 2,
						'slidesToScroll'	=> 2
					)
				),
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
		$column=7;
		$section_title = '';
		$section_class = 'section-categories-carousel';
		$carousel_args 	= array(
			'slidesToShow'		=> 7,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> true,
			'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
			'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
			'appendArrows'		=> '#categories-carousel-2 .custom-slick-nav',
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
	}
?>

<section class="<?php echo $section_class; ?>" id="categories-carousel-2">
	<header class="section-header">
		<h2 class="section-title"><?php echo $section_title; ?></h2>
		<nav class="custom-slick-nav"></nav><!-- .custom-slick-nav -->
	</header><!-- .section-header -->

	<div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
		<div class="woocommerce columns-<?php echo $column; ?>">
			<div class="products">
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="All in One PC" src="/assets/images/category/16.png"> <h2 class="woocommerce-loop-category__title">All in One PC </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Audio & Music" src="/assets/images/category/17.png"> <h2 class="woocommerce-loop-category__title">Audio & Music </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Cells & Tablets" src="/assets/images/category/18.png"> <h2 class="woocommerce-loop-category__title">Cells & Tablets </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Computers & Laptops" src="/assets/images/category/19.png"> <h2 class="woocommerce-loop-category__title">Computers & Laptops </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Desktop PCs" src="/assets/images/category/20.png"> <h2 class="woocommerce-loop-category__title">Desktop PCs </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Digital Cameras" src="/assets/images/category/21.png"> <h2 class="woocommerce-loop-category__title">Digital Cameras </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Games & Consoles" src="/assets/images/category/22.png"> <h2 class="woocommerce-loop-category__title">Games & Consoles </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Headphones" src="/assets/images/category/23.png"> <h2 class="woocommerce-loop-category__title">Headphones </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Home Entertainment" src="/assets/images/category/24.png"> <h2 class="woocommerce-loop-category__title">Home Entertainment </h2></a></div>
				<div class="product-category product"><a href="{{route("category")}}"><img width="300" height="300" alt="Home Theater & Audio" src="/assets/images/category/20.png"> <h2 class="woocommerce-loop-category__title">Home Theater & Audio </h2></a></div>
			</div><!-- .products-->
		</div><!-- .woocommerce -->
	</div>
</section><!-- .section-top-categories -->
