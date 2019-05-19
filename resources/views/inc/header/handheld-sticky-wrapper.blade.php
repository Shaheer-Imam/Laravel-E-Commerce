<div class="techmarket-sticky-wrap">
	<div class="row">

		<?php @include 'inc/menu/handheld-navigation'; ?>

		<div class="site-search">
			<div class="widget woocommerce widget_product_search">
				<form role="search" method="get" class="woocommerce-product-search" action="index">
					<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
					<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s"/>
					<input type="submit" value="Search"/>
					<input type="hidden" name="post_type" value="product"/>
				</form>
			</div><!-- .widget -->
		</div><!-- .site-search -->

		<a class="handheld-header-cart-link has-icon" href="{{route("cart")}}" title="View your shopping cart">
			<i class="tm tm-shopping-bag"></i>
			<span class="count">2</span>
		</a>

	</div><!-- /.row -->
</div><!-- .techmarket-sticky-wrap -->
