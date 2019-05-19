<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$column = 5;
?>

<?php

	$products = array(
		array(
			'wishlist' => 'true',
			'onsale'   => '',  
			'product_name' => 'Light Weight Ikea Tunholmen Table',
			'productImageURL' => 'assets/images/garden/f1.jpg',
            'price' =>'456.00',
           	'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'Tunholmen',
			'productImageURL' => 'assets/images/garden/f2.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Hallo Seat Back Pad Outdoor Beige',
			'productImageURL' => 'assets/images/garden/f3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Pale Blue Mammut Kids Children’s Chair',
			'productImageURL' => 'assets/images/garden/f4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'White Outdoor Chair',
			'productImageURL' => 'assets/images/garden/f5.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Falster Chair',
			'productImageURL' => 'assets/images/garden/f6.jpg',
			'price' =>'456.00',
			'starrating' => ''
            
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'Falster Chair',
			'productImageURL' => 'assets/images/garden/f7.jpg',
			'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
            
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'White Outdoor Chair',
			'productImageURL' => 'assets/images/garden/f8.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Hallo Seat Back Pad Outdoor Beige',
			'productImageURL' => 'assets/images/garden/f3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'White Outdoor Chair',
			'productImageURL' => 'assets/images/garden/f6.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Light Weight Ikea Tunholmen Table',
			'productImageURL' => 'assets/images/garden/f4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'One Nutritional Shake, Berry',
			'productImageURL' => 'assets/images/garden/f7.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Natural Force – Organic Whey Unflavored – 13.76 oz',
			'productImageURL' => 'assets/images/garden/f1.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => 'true',
			'product_name' => 'Gerber, Rice Cereal, Single Grain',
			'productImageURL' => 'assets/images/garden/f5.jpg',
            'oldPrice' =>'399.00',
            'newPrice' =>'262.81',
            'starrating' => ''
		),
		array(
			'wishlist' => 'true',
			'onsale'   => '',
			'product_name' => 'Baby Wipes, Free and Clear',
			'productImageURL' => 'assets/images/garden/f3.jpg',
            'price' =>'399.00',
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
