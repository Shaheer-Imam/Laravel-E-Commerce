@include('inc/components/product-image')
@include('inc/components/product-name')
<?php 
	$column = 5;
?>


<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index">Home</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Computers &amp; Laptops
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<section class="section-product-categories">
						<header class="section-header">
							<h1 class="woocommerce-products-header__title page-title">Computers &amp; Laptops Categories</h1>
						</header>

						<div class="woocommerce columns-<?php echo $column; ?>">
							<div class="product-loop-categories">
								<div class="product-category product first"> 
									<a href="{{route("category")}}">
										<img src="{{asset('assets/images/category/21.png')}}" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> Digital Cameras <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								<div class="product-category product"> 
									<a href="{{route("category")}}">
										<img src="{{asset('assets/images/category/17.png')}}" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> Audio & Music <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								<div class="product-category product last"> 
									<a href="{{route("category")}}">
										<img src="{{asset('assets/images/category/23.png')}}" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> Headphones <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								<div class="product-category product"> 
									<a href="{{route("category")}}">
										<img src="{{asset('assets/images/category/25.png')}}" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> Home Theater & Audio <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								<div class="product-category product last"> 
									<a href="{{route("category")}}">
										<img src="{{asset('assets/images/category/18.png')}}" alt="Ultrabooks" width="224" height="197">
									<h2 class="woocommerce-loop-category__title"> Cells & Tablets <mark class="count">(5)</mark></h2> 
									</a>
								</div>

								
							</div><!-- .product-loop-categories -->
						</div><!-- .woocommerce -->


					</section><!-- .section-product-categories -->

					@include ('inc/blocks/homepage/products-carousel')

					@include ('inc/blocks/homepage/7-column-product-carousel')
				</main><!-- #main -->
			</div><!-- #primary -->

			<div id="secondary" class="widget-area shop-sidebar" role="complementary">
				@include('inc/components/sidebar/single-product/product-categories-widget')
				@include('inc/components/sidebar/single-product/products-carousel-widget')
			</div>
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->

<div class="col-full">
	@include ('inc/blocks/homepage/recently-viewed-products')
	
	@include ('inc/blocks/homepage/brands-carousel')
</div><!-- .col-full -->