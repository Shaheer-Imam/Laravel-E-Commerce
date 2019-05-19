<ul class="header-compare nav navbar-nav">
	<li class="nav-item">
		<a href="{{route("compare")}}" class="nav-link">
			<i class="tm tm-compare"></i>
			<span id="top-cart-compare-count" class="value">3</span>
		</a>
	</li>
</ul><!-- .header-compare -->

<ul class="header-wishlist nav navbar-nav">
	<li class="nav-item">
		<a href="{{route("wishlist")}}" class="nav-link">
			<i class="tm tm-favorites"></i>
			<span id="top-cart-wishlist-count" class="value">3</span>
		</a>
	</li>
</ul><!-- .header-wishlist -->

<ul id="site-header-cart" class="site-header-cart menu">
	<li class="animate-dropdown dropdown ">
		<a class="cart-contents" href="{{route("cart")}}" data-toggle="dropdown" title="View your shopping cart">
			<i class="tm tm-shopping-bag"></i>
			<span class="count">2</span>
			<span class="amount"><span class="price-label">Your Cart</span>&#036;136.99</span>
		</a>
		
		<ul class="dropdown-menu dropdown-menu-mini-cart">
			<li>
				<div class="widget woocommerce widget_shopping_cart">
					<div class="widget_shopping_cart_content">
						<ul class="woocommerce-mini-cart cart_list product_list_widget ">
							<li class="woocommerce-mini-cart-item mini_cart_item">
								<a href="#" class="remove" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>													
								<a href="index.blade.php?page=single-product-sidebar">
									<img src="/assets/images/products/mini-cart1.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" >XONE Wireless Controller&nbsp;
								</a>
								<span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>64.99</span></span>					
							</li>
							<li class="woocommerce-mini-cart-item mini_cart_item">
								<a href="#" class="remove" aria-label="Remove this item" data-product_id="27" data-product_sku="">×</a>
								<a href="index.blade.php?page=single-product-sidebar">
									<img src="/assets/images/products/mini-cart2.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" >Gear Virtual Reality 3D with Bluetooth Glasses&nbsp;							
								</a>											
								<span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>72.00</span></span>					
							</li>
						</ul><!-- .cart_list -->
						<p class="woocommerce-mini-cart__total total">
							<strong>Subtotal:</strong>
							<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>136.99</span>
						</p>
						<p class="woocommerce-mini-cart__buttons buttons">
							<a href="{{route("cart")}}" class="button wc-forward">View cart</a>
							<a href="{{route("checkout")}}" class="button checkout wc-forward">Checkout</a>
						</p>
					</div><!-- .widget_shopping_cart_content -->
				</div><!-- .widget_shopping_cart -->
			</li>
		</ul><!-- .dropdown-menu-mini-cart -->
	</li>
</ul><!-- .site-header-cart -->