<div class="row section-products-carousel-widget-with-tabs">
	<div class="products-carousel-with-brands">
		<section class="section-landscape-products-widget-carousel">
			<header class="section-header">
				<h2 class="section-title">Top Rated Products</h2>
			</header>

			<div class="products-carousel">
				<div class="container-fluid">
					<div class="woocommerce columns-1">
						<div class="products">
							<?php @include'inc/blocks/homepage/landscape-product-widget'; ?>

						</div>
					</div>
				</div>
			</div><!-- .products-carousel -->
		</section><!-- .section-landscape-products-widget-carousel -->

		<div class="columns-2 section-brands">
			<header class="section-header">
				<h2 class="section-title">Featured Brands</h2>
			</header>

			<div class="brands">
				<div class="item"><a href="{{route("shop")}}"><figure><figcaption class="text-overlay"><div class="info"><h4>apple</h4></div></figcaption><img width="145" height="50" class="img-responsive desaturate" alt="apple" src="/assets/images/brands/1.png"></figure></a></div>

				<div class="item"><a href="{{route("shop")}}"><figure><figcaption class="text-overlay"><div class="info"><h4>bosch</h4></div></figcaption><img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="/assets/images/brands/2.png"></figure></a></div>

				<div class="item"><a href="{{route("shop")}}"><figure><figcaption class="text-overlay"><div class="info"><h4>cannon</h4></div></figcaption><img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="/assets/images/brands/3.png"></figure></a></div>

				<div class="item"><a href="{{route("shop")}}"><figure><figcaption class="text-overlay"><div class="info"><h4>connect</h4></div></figcaption><img width="145" height="50" class="img-responsive desaturate" alt="connect" src="/assets/images/brands/4.png"></figure></a></div>

				<div class="item"><a href="{{route("shop")}}"><figure><figcaption class="text-overlay"><div class="info"><h4>galaxy</h4></div></figcaption><img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="/assets/images/brands/5.png"></figure></a></div>

				<div class="item"><a href="{{route("shop")}}"><figure><figcaption class="text-overlay"><div class="info"><h4>gopro</h4></div></figcaption><img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="/assets/images/brands/6.png"></figure></a></div>
			</div>
		</div><!-- .section-brands -->
	</div>

	<div class="products-carousel-tabs-block">
		<?php @include'inc/blocks/homepage/2-rows-carousel-tab'; ?>
	</div>
</div>
