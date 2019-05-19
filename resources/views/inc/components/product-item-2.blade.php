<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$column = 6;	
?>

<?php

	$products = array(
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Smart Watches 3 SWR50',
			'productImageURL' => 'assets/images/products/xs-1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => ''

		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'ZenBook 3 Ultrabook 8GB 512SSD W10',
			'productImageURL' => 'assets/images/products/xs-2.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'On-ear Wireless NXTG',
			'productImageURL' => 'assets/images/products/xs-3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => '4K Action Cam with  Wi-Fi & GPS',
			'productImageURL' => 'assets/images/products/xs-4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'XONE Wireless Controller',
			'productImageURL' => 'assets/images/products/xs-5.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Gear Virtual Reality 3D with Bluetooth Glasses',
			'productImageURL' => 'assets/images/products/xs-6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Bluetooth on-ear PureBass Headphones',
			'productImageURL' => 'assets/images/products/xs-7.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Video & Air Quality Monitor',
			'productImageURL' => 'assets/images/products/xs-8.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Watch Stainless with Grey Suture Leather Strap',
			'productImageURL' => 'assets/images/products/xs-9.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Xtreme ultimate splashproof  portable speaker',
			'productImageURL' => 'assets/images/products/xs-4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Xtreme ultimate splashproof  portable speaker',
			'productImageURL' => 'assets/images/products/xs-2.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Bbd 23-Inch Screen LED-Lit  Monitorss Buds',
			'productImageURL' => 'assets/images/products/xs-1.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Drone WIFI FPV With 4K',
			'productImageURL' => 'assets/images/products/xs-6.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Band Fitbit Flex',
			'productImageURL' => 'assets/images/products/xs-8.jpg',
            'oldPrice' =>'399.00',
            'newPrice' =>'262.81',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Band Fitbit Flex',
			'productImageURL' => 'assets/images/products/xs-3.jpg',
            'price' =>'399.00',
            'starrating' => ''
		),
		array(
			'wishlist' => '',
            'onsale'   => '',
			'product_name' => 'Band Fitbit Flex',
			'productImageURL' => 'assets/images/products/xs-7.jpg',
            'price' =>'262.81',
            'starrating' => ''
		)
	
	);

?>

<div class="products">
    <?php 
   		 shuffle($products);
    	foreach($products as $product):
        
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

		<?php
    	$productImageURL = isset( $product['productImageURL'] ) ? $product['productImageURL'] : '#';
        $oldPrice = isset( $product['oldPrice'] ) ? $product['oldPrice'] : '';
        $newPrice = isset( $product['newPrice'] ) ? $product['newPrice'] : '';
        $price = isset( $product['price'] ) ? $product['price'] : '';
        $productName = isset( $product['product_name'] ) ? $product['product_name'] : '';
        ?>
        <div class="product"> 
            <?php
                if($product['wishlist']==true) {
            ?>
                <div class="yith-wcwl-add-to-wishlist">
                    <a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                </div> 
             <?php } ?> 
             
        	<a href="{{route("product")}}" class="woocommerce-LoopProduct-link">
            
                <?php
                    if($product['onsale']==true) {
                ?>
                    <span class="onsale"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>150.04</span></span>
                <?php } ?> 

                    
                <img src="<?php echo $productImageURL;?>" width="224" height="197" class="wp-post-image" alt="">

                <span class="price">
                    <ins><span class="amount"> <?php echo $newPrice;?></span></ins>
                    <?php if($oldPrice):?>
                        <del><span class="amount"><?php echo $oldPrice;?></span></del>
                    <?php endif;?>
                    <span class="amount"> <?php echo $price;?></span>
                </span><!-- /.price -->

                <h2 class="woocommerce-loop-product__title"><?php echo $productName;?></h2>
            </a>  


            <?php
                if($product['starrating']==true) {
            ?>

                <div class="techmarket-product-rating">
                    <div class="star-rating" title="Rated 0 out of 5">
                        <span style="width:0%"><strong class="rating">0</strong> out of 5</span>
                    </div> 
                    <span class="review-count">(5)</span>
                </div>

            <?php } ?>

            <div class="hover-area">
                <a class="button add_to_cart_button" href="{{route("cart")}}" rel="nofollow">Add to cart</a>
                <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
            </div>
        </div><!-- /.product-outer -->
    <?php endforeach;?>
</div>



