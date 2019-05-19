<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$column = 5;
?>

<?php

	$products = array(
		array(
			'wishlist' => 'true',
			'onsale'   => '',  
			'product_name' => 'Sea Salt Seaweed Snack',
			'productImageURL' => 'assets/images/organic/1.jpg',
            'price' =>'456.00',
           	'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'Organic Corn Flakes Cereal, Fruit Juice Sweetened',
			'productImageURL' => 'assets/images/organic/2.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'VeganEgg, 100% Plant Based',
			'productImageURL' => 'assets/images/organic/3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Orange Organic Dark Chocolate- 70% Cocoa',
			'productImageURL' => 'assets/images/organic/4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Ranch Dressing with Avocado Oil, Dairy-Free',
			'productImageURL' => 'assets/images/organic/5.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Avocado Oil Mayo',
			'productImageURL' => 'assets/images/organic/6.jpg',
			'price' =>'456.00',
			'starrating' => ''
            
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'Organic Fruit Strips, Strawberry',
			'productImageURL' => 'assets/images/organic/7.jpg',
			'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
            
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Organic Creamy Peanut Butter',
			'productImageURL' => 'assets/images/organic/8.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Organic Extra Virgin Olive Oil',
			'productImageURL' => 'assets/images/organic/9.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Cacao Chip Cookies, 6 count',
			'productImageURL' => 'assets/images/organic/10.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => '5-Day Healthy Detox Plan',
			'productImageURL' => 'assets/images/organic/11.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'One Nutritional Shake, Berry',
			'productImageURL' => 'assets/images/organic/12.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Natural Force – Organic Whey Unflavored – 13.76 oz',
			'productImageURL' => 'assets/images/organic/13.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'Gerber, Rice Cereal, Single Grain',
			'productImageURL' => 'assets/images/organic/14.jpg',
            'oldPrice' =>'399.00',
            'newPrice' =>'262.81',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Baby Wipes, Free and Clear',
			'productImageURL' => 'assets/images/organic/15.jpg',
            'price' =>'399.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Cacao Chip Cookies, 6 count',
			'productImageURL' => 'assets/images/organic/10.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => '5-Day Healthy Detox Plan',
			'productImageURL' => 'assets/images/organic/11.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'One Nutritional Shake, Berry',
			'productImageURL' => 'assets/images/organic/12.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'Organic Fruit Strips, Strawberry',
			'productImageURL' => 'assets/images/organic/7.jpg',
			'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
            
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Organic Creamy Peanut Butter',
			'productImageURL' => 'assets/images/organic/8.jpg',
            'price' =>'456.00',
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

   
    <?php display_product_1( $product ); ?>
   
    <?php endforeach;?>
</div>
