<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$productImage = array(
		1 => array('product_image' => 'assets/images/products/sm-1.jpg'),
		2 => array('product_image' => 'assets/images/products/sm-2.jpg'),
		3 => array('product_image' => 'assets/images/products/sm-3.jpg'),
		4 => array('product_image' => 'assets/images/products/sm-4.jpg'),
		5 => array('product_image' => 'assets/images/products/xs-1.jpg'),
		6 => array('product_image' => 'assets/images/products/xs-2.jpg'),
		7 => array('product_image' => 'assets/images/products/xs-3.jpg'),
		8 => array('product_image' => 'assets/images/products/xs-4.jpg'),
		9 => array('product_image' => 'assets/images/products/xs-5.jpg'),
		10 => array('product_image' => 'assets/images/products/xs-6.jpg'),
		11 => array('product_image' => 'assets/images/products/sm-2.jpg'),
		12 => array('product_image' => 'assets/images/products/sm-4.jpg'),
		13 => array('product_image' => 'assets/images/products/sm-3.jpg'),
		14 => array('product_image' => 'assets/images/products/xs-3.jpg'),
		15 => array('product_image' => 'assets/images/products/xs-4.jpg'),
		16 => array('product_image' => 'assets/images/products/xs-5.jpg')
	);
	
	if($page=='home-v2') {
        $item = 15;
	}

	else if($page=='shop' || $page=='home-v4' || $page=='single-product-sidebar' || $page=='product-category' || $page=='shop-listing' || $page=='shop-extended' || $page=='shop-right-sidebar' || $page=='shop-listing-with-product-sidebar' || $page=='shop-listing-large') {
       
        $item = 4;
    }

    else if($page=='home-v5' || $page=='home-v6') {
       
        $item = 4;
	}
	else{
        $item = 8;
	}
    
?>

<?php for ($i= 1; $i <= $item; $i++) { ?>	

	<div class="landscape-product-widget product">
		<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
			<div class="media">
				<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">

				<div class="media-body">
					<span class="price">
						<ins><span class="amount"> 50.99</span></ins>
						<del><span class="amount">26.99</span></del>
		
					</span><!-- .price -->

					<h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth  Speaker – Neon Green</h2>

					<div class="techmarket-product-rating">
						<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
						</div> 
						<span class="review-count">(0)</span>
					</div><!-- .techmarket-product-rating -->
				</div><!-- .media-body -->
			</div><!-- .media -->
		</a><!-- .woocommerce-LoopProduct-link -->
	</div>
<?php } ?>