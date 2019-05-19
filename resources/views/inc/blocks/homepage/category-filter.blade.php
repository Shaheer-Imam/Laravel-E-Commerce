<?php @include'inc/components/product-image'; ?>

<section class="section-categories-filter stretch-full-width">
	<div class="col-full">
		<header class="section-header">
			<h2 class="section-title"><strong>Choose TV</strong> you are Looking for:</h2>
			<div class="categories">
				<div class="select-picker">
					<select class="categories-dropdown" id="cat" name="cat">
						<option selected="selected" value="0">All Categories</option>
						<option value="television" class="level-0">Televisions</option>
						<option value="home-theater-audio" class="level-0">Home Theater &amp; Audio</option>
						<option value="headphones" class="level-0">Headphones</option>
						<option value="digital-cameras" class="level-0">Digital Cameras</option>
						<option value="cells-tablets" class="level-0">Cells &amp; Tablets</option>
						<option value="smartwatches" class="level-0">Smartwatches</option>
						<option value="games-consoles" class="level-0">Games &amp; Consoles</option><option value="printer" class="level-0">Printer</option><option value="tv-video" class="level-0">TV &amp; Video</option><option value="home-entertainment" class="level-0">Home Entertainment</option><option value="tvs" class="level-0">TVs</option><option value="speakers" class="level-0">Speakers</option><option value="computers-laptops" class="level-0">Computers &amp; Laptops</option><option value="laptops" class="level-0">Laptops</option><option value="ultrabooks" class="level-0">Ultrabooks</option><option value="notebooks" class="level-0">Notebooks</option><option value="desktop-pcs" class="level-0">Desktop PCs</option><option value="mac-computers" class="level-0">Mac Computers</option><option value="all-in-one-pc" class="level-0">All in One PC</option><option value="audio-music" class="level-0">Audio &amp; Music</option><option value="pc-components" class="level-0">PC Components</option>
					</select>
				</div><!-- .select-picker -->
			</div><!-- .categories -->
		</header><!-- .section-header -->

		<div class="categories-filter-products">
			<div class="woocommerce columns-4">
				<div class="products">
					<?php for ($i=1; $i < 9; $i++) { ?>
						<div class="product-featured product">
							<a href="{{route("product")}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
								<img width="224" height="197" src="<?php echo $productImage[$i]['product_image'] ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="">
								<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>730.00</span></span>
								<h2 class="woocommerce-loop-product__title">Smiling AC1900 (24×8)  Wi-Fi Cable Modem</h2>
							</a>
							<div class="techmarket-product-rating">
								<div class="star-rating" title="Rated 0 out of 5"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span>
							</div>
							<a href="{{route("cart")}}" class="button add_to_cart_button">Add to cart</a>
						</div>
					<?php } ?>
			
				</div><!-- .products -->
			</div><!-- .woocommerce -->
		</div><!-- .categories-filter-products -->	
	</div><!-- .col-full -->	
</section><!-- .section-categories-filter -->