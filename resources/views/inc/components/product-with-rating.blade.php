<?php
function display_product_rating($productImageURL,$oldPrice,$newPrice,$price, $productName){ ?>
<div class="product">    
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

    <div class="techmarket-product-rating">
        <div title="Rated 4.33 out of 5" class="star-rating">
        <span style="width:86.6%"><strong class="rating">4.33</strong> out of 5</span></div> 
        <span class="review-count">(3)</span>
    </div>

    <div class="hover-area">
        <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
    </div>
</div><!-- /.product-outer -->
<?php } ?>





