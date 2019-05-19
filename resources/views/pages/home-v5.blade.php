<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<div class="homev5-slider-with-banners row">
						<?php @include 'inc/blocks/homepage/slider/homev5-slider'; ?>
						
						<?php @include 'inc/components/banner/homev5-banner-block'; ?>
					</div><!-- .homev5-slider-with-banners -->

					<?php @include 'inc/blocks/homepage/categories-carousel'; ?>

					<?php @include 'inc/blocks/homepage/product-carousel-with-tab-product'; ?>

					<?php @include 'inc/blocks/homepage/fullwidth-notice'; ?>

					<?php @include 'inc/blocks/homepage/deals-carousel-v2'; ?>

					<?php @include 'inc/blocks/homepage/products-carousel-with-vertical-tabs'; ?>

					<?php @include 'inc/blocks/homepage/full-width-banner'; ?>

					<?php @include 'inc/blocks/homepage/product-carousel-with-featured'; ?>

					<?php @include 'inc/blocks/homepage/product-carousel-with-bg'; ?>

					<?php @include 'inc/blocks/homepage/best-rated-sellers'; ?>


				</main><!-- #main -->
			</div><!-- #primary -->

			<div id="secondary" class="widget-area" role="complementary">
				<?php @include 'inc/components/sidebar/banner-widget'; ?>

				<?php @include 'inc/components/sidebar/features-widget'; ?>

				<?php @include 'inc/components/sidebar/post-carousel-widget'; ?>

				<?php @include 'inc/components/sidebar/products-carousel-widget'; ?>

				<?php @include 'inc/components/sidebar/poster-widget'; ?>
				
				<?php @include 'inc/components/sidebar/single-product/products-carousel-widget'; ?>

			</div><!-- #secondary -->
			<?php @include'inc/blocks/homepage/brands-carousel'; ?>
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->