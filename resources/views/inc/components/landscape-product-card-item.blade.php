<?php
	$productImage = array(
		1 => array('product_image' => 'assets/images/products/1-1.jpg'),
		2 => array('product_image' => 'assets/images/products/1-2.jpg'),
		3 => array('product_image' => 'assets/images/products/1-3.jpg'),
		4 => array('product_image' => 'assets/images/products/1-4.jpg'),
		5 => array('product_image' => 'assets/images/products/1-5.jpg'),
		6 => array('product_image' => 'assets/images/products/1-6.jpg'),
		7 => array('product_image' => 'assets/images/products/1-2.jpg'),
		8 => array('product_image' => 'assets/images/products/1-4.jpg'),
		9 => array('product_image' => 'assets/images/products/1-6.jpg'),
		10 => array('product_image' => 'assets/images/products/1-5.jpg'),
		11 => array('product_image' => 'assets/images/products/1-1.jpg'),
		12 => array('product_image' => 'assets/images/products/1-2.jpg'),
		13 => array('product_image' => 'assets/images/products/1-6.jpg')
	
	);
	shuffle($productImage);

	$productName = array(
		1 => array('product_name' => '60UH6150 60-Inch 4K Ultra  HD Smart LED TV'),
		2 => array('product_name' => '55″ KU6470 6 Series UHD  Crystal Colour HDR Smart TV'),
		3 => array('product_name' => 'UN40H5003 40-Inch 1080p  LED TV with Backlight'),
		4 => array('product_name' => '65UH7700 65-Inch 4K Ultra  HD Smart LED TV'),
		5 => array('product_name' => '55UP130 55-Inch 4K Ultra HD  Roku Smart LED TV'),
		6 => array('product_name' => '55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D'),
		7 => array('product_name' => '55″ KU6470 6 Series UHD  Crystal Colour HDR Smart TV'),
		8 => array('product_name' => '55EG9600 – 55-Inch 2160p Smart Curved Ultra HD 3D'),
		9 => array('product_name' => 'UN40H5003 40-Inch 1080p  LED TV with Backlight'),
		10 => array('product_name' => 'UN40H5003 40-Inch 1080p  LED TV with Backlight'),
		11 => array('product_name' => '55″ KU6470 6 Series UHD  Crystal Colour HDR Smart TV'),
		12 => array('product_name' => '60UH6150 60-Inch 4K Ultra  HD Smart LED TV'),
		13 => array('product_name' => '55UP130 55-Inch 4K Ultra HD  Roku Smart LED TV')
	);
	shuffle($productName);

	$productLabel = array(
		1 => array('product_label' => 'A+'),
		2 => array('product_label' => 'A++'),
		3 => array('product_label' => 'A+'),
		4 => array('product_label' => 'A++'),
		5 => array('product_label' => 'A'),
		6 => array('product_label' => 'A++'),
		7 => array('product_label' => 'A++'),
		8 => array('product_label' => 'A+'),
		9 => array('product_label' => 'A++'),
		10 => array('product_label' => 'A+'),
		11 => array('product_label' => 'A+'),
		12 => array('product_label' => 'A++'),
		13 => array('product_label' => 'A+')
	);
	shuffle($productLabel);

	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	if($page=='home-v1') {
		
        $item = 8;
	}else if($page=='home-v3') {
        
        $item = 6;
    }else if($page=='home-v4') {
        
        $item = 12;
    }else if($page=='home-v2') {
        
        $item = 3;
    }
    ?>


<?php for ($i=1; $i <=$item; $i++) { ?>	
	<div class="landscape-product-card product">
		<div class="media">
			<div class="yith-wcwl-add-to-wishlist">
				<a href="{{route("wishlist")}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
			</div>

			<a class="woocommerce-LoopProduct-link" href="{{route("product")}}">
				<img class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>" alt="">
			</a>

			<div class="media-body">
				<a class="woocommerce-LoopProduct-link " href="{{route("product")}}">

					<span class="price">
	                    <ins><span class="amount"> $939.99</span></ins>
	                    <del><span class="amount">$627.99</span></del>
	            	</span><!-- .price -->

					<h2 class="woocommerce-loop-product__title"><?php echo $productName[$i]['product_name'] ?></h2>

					<div class="ribbon green-label">
						<span><?php echo $productLabel[$i]['product_label'] ?></span>
					</div>

					<div class="techmarket-product-rating">
						<div title="Rated 0 out of 5" class="star-rating"><span style="width:0%"><strong class="rating">0</strong> out of 5</span>
						</div> 
						<span class="review-count">(0)</span>
					</div><!-- .techmarket-product-rating -->
				</a>

				<div class="hover-area">
					<a class="button add_to_cart_button" href="{{route("cart")}}" >Add to cart</a>
					<a href="{{route("compare")}}" class="add-to-compare-link">Add to compare</a>
				</div><!-- .hover-area -->
			</div><!-- .media-body -->
		</div><!-- .media -->
	</div><!-- .woocommerce-LoopProduct-link -->
<?php } ?>