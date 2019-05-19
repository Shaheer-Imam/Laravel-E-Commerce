<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			
			<nav class="woocommerce-breadcrumb">
				<a href="index">Home</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Shop
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<div class="shop-archive-header">
						<div class="jumbotron">
							<div class="jumbotron-img">
								<img width="416" height="283" alt="" src="/assets/images/products/jumbo.jpg" class="jumbo-image alignright">
							</div>

							<div class="jumbotron-caption">
								<h3 class="jumbo-title">Virtual Reality Headsets</h3>
								<p class="jumbo-subtitle">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat. <br>
								<br>Maecenas in sodales nisl. Pellentesque ac nibh mi. Ut lobortis odio nulla, congue rhoncus risus facilisis eget.
								Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
								<a href="#">read more <i class="tm tm-long-arrow-right"></i></a>
								</p>
							</div><!-- .jumbotron-caption -->
						</div><!-- .jumbotron -->
					</div><!-- .shop-archive-header -->

					 @include( 'inc/components/shop-control-bar')

					<div class="tab-content">
						<div id="grid" class="tab-pane active" role="tabpanel">
							 @include('inc/components/product-grid')
						</div><!-- .tab-pane -->

						<div id="grid-extended" class="tab-pane" role="tabpanel">
							 @include('inc/components/product-grid-ext')
						</div><!-- .tab-pane -->

						<div id="list-view-large" class="tab-pane" role="tabpanel">
							 @include('inc/components/product-list-view-large')
						</div><!-- .tab-pane -->

						<div id="list-view" class="tab-pane" role="tabpanel">
							 @include('inc/components/product-list-view')
						</div><!-- .tab-pane -->

						<div id="list-view-small" class="tab-pane" role="tabpanel">
							 @include('inc/components/product-list-view-small')
						</div><!-- .tab-pane -->						
						
					</div><!-- .tab-content -->

					 @include( 'inc/components/shop-control-bar-bottom')
				</main><!-- #main -->
			</div><!-- #primary -->

			<div id="secondary" class="widget-area shop-sidebar" role="complementary">

				 @include( 'inc/components/sidebar/product-categories-widget')

				<div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
					<span class="gamma widget-title">Filters</span>
					 @include( 'inc/components/sidebar/price-fliter')

					 @include( 'inc/components/sidebar/product-filters-sidebar')

				</div>

				 @include( 'inc/components/sidebar/single-product/products-carousel-widget')
			</div><!-- #secondary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->

<div class="col-full">
	 @include( 'inc/blocks/homepage/brands-carousel')
</div><!-- .col-full -->