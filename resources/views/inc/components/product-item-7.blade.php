<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column = 5;
?>

<?php

	$products = array(
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Womens Active T-Shirt TSDF201 – Pastel Orange',
			'productImageURL' => 'assets/images/sports/1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => ''
            
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Nike Zoom Winflo 4 Running Shoes Ladies',
			'productImageURL' => 'assets/images/sports/2.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'T-shirt Women’s Cycling RKD003 – Fuchsia',
			'productImageURL' => 'assets/images/sports/3.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Training Shirt For Men TSMF207 – Allover Gray',
			'productImageURL' => 'assets/images/sports/4.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Sleeveless T-shirt, Men’s Training  TSMF215 – White',
			'productImageURL' => 'assets/images/sports/5.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Shorts For Men 4F',
			'productImageURL' => 'assets/images/sports/6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Puma Academy Backpack – Blue – Men’s',
			'productImageURL' => 'assets/images/sports/7.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Polar Women PLD003 – Light Gray Melance',
			'productImageURL' => 'assets/images/sports/8.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Swingman Nba Knicks Anthony',
			'productImageURL' => 'assets/images/sports/9.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Adidas NBA Replica Jersey',
			'productImageURL' => 'assets/images/sports/10.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Nike Cross Over Tank Top Mens',
			'productImageURL' => 'assets/images/sports/11.jpg',
            'price' =>'456.00',
            'starrating' => ''
		),
		array(
            'wishlist' => 'true',
            'onsale'   => '',
			'product_name' => 'Adidas Golden State Warriors Custom Replica Home Jersey',
			'productImageURL' => 'assets/images/sports/12.jpg',
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



