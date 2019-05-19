<?php
	$products = array(
		array(
			'product_name' => 'Pepperoni Pizza',
			'productImageURL' => 'assets/images/products/1.jpg  ',
			'oldPrice'		=>'',
			'newPrice'		=>'',
            'price' => '898.00'
		),

		array(
			'product_name' => 'Trio Cheese',
			'productImageURL' => 'assets/images/products/1.jpg ',
			'oldPrice'		=>'',
			'newPrice'		=>'',
            'price' => '898.00'
		),

		array(
			'product_name' => 'Apricot Chicken',
			'productImageURL' => 'assets/images/products/1.jpg ',
			'oldPrice'		=>'',
			'newPrice'		=>'',
            'price' => '898.00'
		),
		array(
			'product_name' => 'Pepperoni Pizza',
			'productImageURL' => 'assets/images/products/1.jpg ',
			'oldPrice'		=>'',
			'newPrice'		=>'',
            'price' => '898.00'
		),

		array(
			'product_name' => 'Trio Cheese',
			'productImageURL' => 'assets/images/products/1.jpg',
			'oldPrice'		=>'',
			'newPrice'		=>'',
            'price' => '898.00'
		),

		array(
			'product_name' => 'Apricot Chicken',
			'productImageURL' => 'assets/images/products/1.jpg',
			'oldPrice'		=>'',
			'newPrice'		=>'',
            'price' => '898.00'
		),
	);

    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column = 4;
?>

<div class="products">
	<?php foreach($products as $product):
		shuffle($products);

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

		
		<?php display_product( $product ); ?>
		
	<?php endforeach;?>
</div>
