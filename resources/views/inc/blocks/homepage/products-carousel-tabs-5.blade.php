<?php

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if( $page=='home-v10') {
		$section_title = 'Men Bestsellers Shoes';
		$column = '7';
		
		$tab_title = array(
			'All Shoes' , 'Lifestyle' , 'Running' , 'Training &amp; Gym' , 'Softball'
		);

		$section_class = 'techmarket-tabs';

		$tab_carousel_args = array(
			'infinite'          => false,
			'rows'				=> 2,
			'slidesPerRow'		=> 7,
			'slidesToShow'		=> 1,
			'slidesToScroll'	=> 1,
			'dots'				=> false,
			'arrows'			=> false,
			'responsive'		=> array(
				array(
					'breakpoint'	=> 766,
					'settings'		=> array(
						'slidesPerRow'		=> 1
						
					)
				),
				array(
					'breakpoint'	=> 780,
					'settings'		=> array(
						'slidesPerRow'		=> 3
						
					)
				),
				array(
					'breakpoint'	=> 1200,
					'settings'		=> array(
						'slidesPerRow'		=> 4
						
					)
				),
				array(
					'breakpoint'	=> 1700,
					'settings'		=> array(
						'slidesPerRow'		=> 5
						
					)
				)
			)
		);
  	}

  	else if( $page=='home-v11') {
		$section_title = 'Best Running Wears for Beginners';
		$column = '8';

		$tab_title = array(
			'Ladies Running' , 'Mens Running' , 'Ladies Shoes' , 'Mens Shoes' , 'Running Accesories'
		);

		$tab_carousel_args = array(
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
					'breakpoint'	=> 1400,
					'settings'		=> array(
						'slidesToShow'		=> 6,
						'slidesToScroll'	=> 6
					)
				)
			)
		);

		$section_class = '';
	}

	$id = 'tab-' . uniqid();
?>

<section class="section-products-carousel-tabs <?php echo $section_class; ?>">
	<div class="section-products-carousel-tabs-wrap">
		<header class="section-header">
			<h2 class="section-title"><?php echo $section_title; ?></h2>
			<ul role="tablist" class="nav justify-content-end">
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
							<?php 
								if( $page=='home-v11') {
									require 'inc/components/product-item-7';
								}

								else if( $page=='home-v10') {
									require 'inc/components/product-item-4';
								}
							?>
						</div><!-- .woocommerce -->
					</div><!-- .container-fluid -->
				</div><!-- .products-carousel -->
			</div><!-- .tab-pane -->

			<?php } ?>
		</div><!-- .tab-content -->
	</div><!-- .section-products-carousel-tabs-wrap -->
</section><!-- .section-products-carousel-tabs -->