<?php 
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$column=4;
?>

<div class="accessories">

	<div class="accessories-wrapper">

		<?php @include'inc/components/product-image'; ?>

		<div class="accessories-product columns-<?php echo $column; ?>">	
			
			<div class="products">
				
				<?php for ($i=1; $i <=4; $i++) {
				 	shuffle($productImage);
				 ?>
				 
				<?php 
					if ( empty( $loop ) ) {
						$loop = 0;
					}
					$loop++;
					$classes = '';
					if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
						$classes = 'first';
					}
					if ( 0 === $loop % $column ) {
						$classes = 'last';
					}
				?>
					<div class="product">
						<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}"> 
							<img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
							<span class="price">
								<del>
									<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">$</span>1,239.99</span>
								</del> 

								<ins>
									<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">$</span>997.00</span>
								</ins>
							</span>
							<h2 class="woocommerce-loop-product__title">60UH6150 60-Inch 4K Ultra HD Smart LED TV</h2> 
						</a>

						<div class="checkbox accessory-checkbox">
							<label>
								<input type="checkbox" data-product-type="simple" data-product-id="185" data-price="997.00" class="product-check" checked=""> Remove
							</label>
						</div>
					</div>
				<?php } ?>
				
			</div><!-- /.products -->
		</div><!-- .row -->

		<div class="accessories-product-total-price">
			<div class="total-price">
				<span class="total-price-html price">
					<span class="woocommerce-Price-amount amount">
						<span class="woocommerce-Price-currencySymbol">$</span>1,666.94
					</span>
				</span><!-- .total-price-html --> 
				<span>Bundle Price for Selected items</span>
			</div><!-- .total-price -->

			<div class="accessories-add-all-to-cart">
				<button class="button btn btn-primary add-all-to-cart" type="button">Add Bundle to cart</button>
			</div><!-- .accessories-add-all-to-cart -->
		</div><!-- .accessories-product-total-price -->
	</div><!-- .accessories-wrapper -->
</div><!-- .accessories -->
			
			





















































				