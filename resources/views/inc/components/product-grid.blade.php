<?php
$productImage = array(
	1 => array('product_image' => 'assets/images/products/1.jpg'),
	2 => array('product_image' => 'assets/images/products/2.jpg'),
	3 => array('product_image' => 'assets/images/products/3.jpg'),
	4 => array('product_image' => 'assets/images/products/4.jpg'),
	5 => array('product_image' => 'assets/images/products/5.jpg'),
	6 => array('product_image' => 'assets/images/products/6.jpg'),
	7 => array('product_image' => 'assets/images/products/7.jpg'),
	8 => array('product_image' => 'assets/images/products/8.jpg'),
	9 => array('product_image' => 'assets/images/products/9.jpg'),
	10 => array('product_image' => 'assets/images/products/10.jpg'),
	11 => array('product_image' => 'assets/images/products/11.jpg'),
	12 => array('product_image' => 'assets/images/products/12.jpg'),
	13 => array('product_image' => 'assets/images/products/13.jpg'),
	14 => array('product_image' => 'assets/images/products/14.jpg'),
	15 => array('product_image' => 'assets/images/products/15.jpg'),
	16 => array('product_image' => 'assets/images/products/16.jpg'),
	17 => array('product_image' => 'assets/images/products/17.jpg'),
	18 => array('product_image' => 'assets/images/products/5.jpg'),
	19 => array('product_image' => 'assets/images/products/12.jpg'),
	20 => array('product_image' => 'assets/images/products/1.jpg'),
	21 => array('product_image' => 'assets/images/products/8.jpg'),
	22 => array('product_image' => 'assets/images/products/13.jpg'),
	23 => array('product_image' => 'assets/images/products/14.jpg'),
	24 => array('product_image' => 'assets/images/products/15.jpg'),
	25 => array('product_image' => 'assets/images/products/16.jpg'),
	);

    $productName = array(
        1 => array('product_name' => 'Smart Watches 3 SWR50'),
        2 => array('product_name' => 'ZenBook 3 Ultrabook 8GB 512SSD W10'),
        3 => array('product_name' => 'On-ear Wireless NXTG'),
        4 => array('product_name' => '4K Action Cam with  Wi-Fi & GPS'),
        5 => array('product_name' => 'XONE Wireless Controller'),
        6 => array('product_name' => 'Gear Virtual Reality 3D with Bluetooth Glasses'),
        7 => array('product_name' => 'Bluetooth on-ear PureBass Headphones'),
        8 => array('product_name' => 'Video & Air Quality Monitor'),
        9 => array('product_name' => 'Watch Stainless with Grey Suture Leather Strap'),
        10 => array('product_name' => 'Xtreme ultimate splashproof  portable speaker'),
        11 => array('product_name' => 'Xtreme ultimate splashproof  portable speaker'),
        12 => array('product_name' => 'Bbd 23-Inch Screen LED-Lit  Monitorss Buds'),
        13 => array('product_name' => 'ZenBook 3 Ultrabook 8GB 512SSD W10'),
        14 => array('product_name' => 'On-ear Wireless NXTG'),
        15 => array('product_name' => '4K Action Cam with  Wi-Fi & GPS'),
        16 => array('product_name' => 'XONE Wireless Controller'),
        17 => array('product_name' => 'Gear Virtual Reality 3D with Bluetooth Glasses'),
        18 => array('product_name' => 'Bluetooth on-ear PureBass Headphones'),
        19 => array('product_name' => 'Video & Air Quality Monitor'),
        20 => array('product_name' => 'Watch Stainless with Grey Suture Leather Strap'),
        21 => array('product_name' => 'On-ear Wireless NXTG'),
        22 => array('product_name' => 'Xtreme ultimate splashproof  portable speaker'),
        23 => array('product_name' => 'Xtreme ultimate splashproof  portable speaker'),
        24 => array('product_name' => 'Xtreme ultimate splashproof  portable speaker'),
        25 => array('product_name' => 'Bbd 23-Inch Screen LED-Lit  Monitorss Buds'),
    );
    shuffle($productName);
?> 

<?php
    	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

        if($page=='shop' || $page=='shop-right-sidebar') {
            $column = 5;
            $item = 21;
        }

        else if($page=='shop-listing' || $page=='shop-listing-with-product-sidebar') {
            $column = 4;
            $item = 17;
        }

        else if($page=='shop-extended') {
            $column = 4;
            $item = 17;
        }

        else {
    		$column = 7;
            $item = 22;
    	}
    ?>

    <div class="woocommerce columns-<?php echo $column; ?>">
        <div class="products">
            <?php for ($i=1; $i < $item; $i++) { ?>
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

                
                <div class="product <?php echo $classes; ?>">
                    <div class="yith-wcwl-add-to-wishlist">
                         <a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                    </div><!-- .yith-wcwl-add-to-wishlist --> 
                    
                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">

                        <span class="price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                        </span>

                        <h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>
                    </a><!-- .woocommerce-LoopProduct-link -->

                    <div class="hover-area">
                        <a class="button" href="{{route("cart")}}">Add to cart</a>
                        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
                    </div><!-- .hover-area -->
                </div><!-- .product -->
            <?php } ?>

        </div><!-- .products -->
    </div><!-- .woocommerce -->

