<?php
	$tab_carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 8,
		'slidesToScroll'	=> 8,
		'dots'				=> true,
		'arrows'			=> false,
		'responsive'		=> array(
			array(
				'breakpoint'	=> 650,
				'settings'		=> array(
					'slidesToShow'		=> 1,
					'slidesToScroll'	=> 1
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
				'breakpoint'	=> 1700,
				'settings'		=> array(
					'slidesToShow'		=> 6,
					'slidesToScroll'	=> 6
				)
			)
		)
		
	);

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if( $page=='home-v11') {
		$section_title = 'Most Loved Basketball Products';
		$section_product_item = 'inc/components/product-item-7';
		$nav_class = 'justify-content-end';
		$column = '8';
		
		$tab_title = array(
			'Clotching' , 'Jerseys' , 'Basketballs' , 'Hats' , 'Footwear' , 'Accesories'
		);

		$section_class = '';
  	}

  	else if( $page=='home-v12') {
		$section_title = 'Save on Clothing for Her';
		$section_product_item = 'inc/components/product-item';
		$nav_class = 'justify-content-end';
		$column = '8';

		$tab_title = array(
			'Bestsellers' , 'Dresses' , 'Tops' , 'Sweaters' , 'Activewear' , 'Shorts'
		);

		$section_class = '';
	}

	else if( $page=='home-v10') {
		$section_title = 'Shop New Arrivals 2017';

		$tab_title = array(
			'All Shoes' , 'Men' , 'Women' , 'Boys' , 'Girls' , 'Teens'
		);

		$section_class = 'tab-wrap carousel-tab-wrap';
		$section_product_item = 'inc/components/product-item-8';
		$nav_class = 'justify-content-center';
		$column = '5';

		$tab_carousel_args = array(
			'infinite'          => false,
			'slidesToShow'		=> 5,
			'slidesToScroll'	=> 5,
			'dots'				=> true,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 766,
					'settings'		=> array(
						'slidesToShow'		=> 1,
						'slidesToScroll'	=> 1
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
	}

	else if( $page=='home-v3') {

		$section_class = 'section-hot-new-arrivals section-products-carousel-tabs 8-column-tabs';
		$section_title = 'Cell Phones & Tablets';
		$section_product_item = 'inc/components/product-item-12';
		$nav_class = 'justify-content-end';
		$column = '8';

		$tab_title = array(
			'Bestsellers' , 'Android Phones' , 'IOS Phones' , 'Tablets' , 'Accessories'
		);

		$tab_carousel_args = array(
			'slidesToShow'		=> 8,
			'slidesToScroll'	=> 7,
			'dots'				=> true,
			'arrows'			=> false,
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
				'breakpoint'	=> 1700,
				'settings'		=> array(
					'slidesToShow'		=> 6,
					'slidesToScroll'	=> 6
				)
			)
		)
		);
	}

	$id = 'tab-' . uniqid();
?>

<section class="section-products-carousel-tabs <?php echo $section_class; ?>">
	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<h2 class="section-title"><?php echo $section_title; ?></h2>
			<ul role="tablist" class="nav <?php echo $nav_class; ?>">
				<?php for ($i=0; $i < 5; $i++) { ?>
				<li class="nav-item"><a class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>" href="#<?php echo $id . $i; ?>" data-toggle="tab"><?php echo $tab_title[$i]; ?></a></li>
				<?php } ?>
			</ul>
		</header>
		
		<div class="tab-content">
			<?php for ($i=0; $i < 5; $i++) { ?>

			<div id="<?php echo $id . $i; ?>" class="tab-pane <?php echo $i == 0 ? 'active' : ''; ?>" role="tabpanel">
				<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $tab_carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
					<div class="container-fluid">
						<div class="woocommerce columns-<?php echo $column; ?>">
							<?php @include$section_product_item; ?>
							
						</div><!-- .woocommerce -->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<?php } ?>
		</div><!-- .tab-content -->
	</div><!-- .section-products-carousel-tabs-wrap -->
</section><!-- .section-products-carousel-tabs -->