<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<div class="slider-with-banners row">
						 @include ('inc/blocks/homepage/slider/homev2-slider')
						
						 @include ('inc/components/banner/homev2-2-column-banner') 
					</div>

					 @include('inc/blocks/homepage/categories-carousel-3')

					 @include('inc/blocks/homepage/6-1-6-products-tabs')

					 @include ('inc/blocks/homepage/fullwidth-notice')

					 @include ('inc/components/banner/3-column-banner') 

					 @include('inc/blocks/homepage/products-carousel-tabs-2') 

					 @include ('inc/blocks/homepage/3-2-3-product-cards-tabs-with-featured-product') 

					 @include('inc/blocks/homepage/8-column-product-carousel-tabs') 

					 @include ('inc/blocks/homepage/full-width-banner') 

					 @include('inc/blocks/homepage/product-carousel-with-bg') 				
					
					<div class="row section-products-carousel-widget-with-tabs" id="carousel-widget-with-tabs">
						<div class="landscape-products-widget-block">
							 @include('inc/blocks/homepage/landscape-products-widget') 
						</div><!-- .landscape-products-widget-block -->

						<div class="products-carousel-tabs-block">
							 @include('inc/blocks/homepage/2-rows-carousel-tab') 
						</div><!-- .products-carousel-tabs-block -->
					</div><!-- .section-products-carousel-widget-with-tabs -->
						
					 @include('inc/blocks/homepage/brands-carousel') 
						
					 @include ('inc/blocks/homepage/recently-viewed-products') 
					
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->