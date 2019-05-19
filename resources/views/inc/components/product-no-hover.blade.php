<?php

function display_no_hover_product( $product ) {
    $productImageURL = isset( $product['productImageURL'] ) ? $product['productImageURL'] : '#';
    $oldPrice = isset( $product['oldPrice'] ) ? $product['oldPrice'] : '';
    $newPrice = isset( $product['newPrice'] ) ? $product['newPrice'] : '';
    $price = isset( $product['price'] ) ? $product['price'] : '';
    $productName = isset( $product['product_name'] ) ? $product['product_name'] : '';
    ?>
    <div class="product product-featured">    
    	<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
            <img width="224" height="197" src="<?php echo $productImageURL;?>" class="wp-post-image" alt="">

            <span class="price">
                <ins><span class="amount"> <?php echo $newPrice;?></span></ins>
                <?php if($oldPrice):?>
                    <del><span class="amount"><?php echo $oldPrice;?></span></del>
                <?php endif;?>
                <span class="amount"> <?php echo $price;?></span>
            </span><!-- /.price -->

            <h2 class="woocommerce-loop-product__title"><?php echo $productName;?></h2>
        </a>        
        
        <div class="techmarket-product-rating">
            <div class="star-rating" title="Rated 0 out of 5">
                <span style="width:0%"><strong class="rating">0</strong> out of 5</span>
            </div> 
            <span class="review-count">(5)</span>
        </div>

        <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
            
    </div><!-- /.product-outer -->
    <?php
}
?>