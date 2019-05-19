<?php

function display_product( $product ) {
    $productImageURL = isset( $product['productImageURL'] ) ? $product['productImageURL'] : '#';
    $oldPrice = isset( $product['oldPrice'] ) ? $product['oldPrice'] : '';
    $newPrice = isset( $product['newPrice'] ) ? $product['newPrice'] : '';
    $price = isset( $product['price'] ) ? $product['price'] : '';
    $productName = isset( $product['product_name'] ) ? $product['product_name'] : '';
    ?>
    <div class="product content-landscape-product-card-with-gallery">    
    	<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
            <img src="<?php echo $productImageURL;?>" class="wp-post-image" alt="">

            <span class="price">
                <ins><span class="amount"> <?php echo $newPrice;?></span></ins>
                <?php if($oldPrice):?>
                    <del><span class="amount"><?php echo $oldPrice;?></span></del>
                <?php endif;?>
                <span class="amount"> <?php echo $price;?></span>
            </span><!-- /.price -->

            <h2 class="woocommerce-loop-product__title"><?php echo $productName;?></h2>
        </a>

        <div class="hover-area">
            <a class="button add_to_cart_button" href="#" rel="nofollow">Add to cart</a>
            <a class="add-to-compare-link" href="#">Add to compare</a>
        </div>
    </div><!-- /.product-outer -->
    <?php
}
?>