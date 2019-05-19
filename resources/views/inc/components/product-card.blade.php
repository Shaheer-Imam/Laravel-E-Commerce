<?php
function display_card_product($productImageURL, $newPrice, $oldPrice, $price, $productName ) { ?>

	<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
		<div class="media">
			<img class="wp-post-image" src="<?php echo $productImageURL;?>" alt="">

			<div class="media-body">
				<span class="price">
                    <ins><span class="amount"> <?php echo $newPrice;?></span></ins>
                    <?php if($oldPrice):?>
                     <del><span class="amount"><?php echo $oldPrice;?></span></del>
                    <?php endif;?>
                    <span class="amount"> <?php echo $price;?></span>
            	</span><!-- .price -->

				<h2 class="woocommerce-loop-product__title"><?php echo $productName;?></h2>

				<div class="techmarket-product-rating">
					<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
					</div> 
					<span class="review-count">(0)</span>
				</div><!-- .techmarket-product-rating -->
			</div><!-- .media-body -->
		</div><!-- .media -->
	</a><!-- .woocommerce-LoopProduct-link -->
	

<?php } ?>

