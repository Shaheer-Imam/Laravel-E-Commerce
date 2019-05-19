<?php
	
	$products = array(
		array(
			'product_name' => 'Sea Salt Seaweed Snack',
			'productImageURL' => 'assets/images/organic/sm-1.jpg',
			'oldPrice' 		=> '$3,788.00',
			'newPrice'		=>'$4,780.00',
			'price'			=> ''
		),
		array(
			'product_name' => 'Organic Corn Flakes Cereal, Fruit Juice Sweetened',
			'productImageURL' => 'assets/images/organic/sm-2.jpg',
			'oldPrice' 		=> '',
			'newPrice'		=> '',
			'price'			=> '$500'
		),
		array(
			'product_name' => 'VeganEgg, 100% Plant Based',
			'productImageURL' => 'assets/images/organic/sm-3.jpg',
			'oldPrice' 		=> '$3,788.00',
			'newPrice'		=>'$4,780.00',
			'price'			=> ''
		),
		array(
			'product_name' => 'Orange Organic Dark Chocolate- 70% Cocoa',
			'productImageURL' => 'assets/images/organic/sm-4.jpg',
			'oldPrice' 		=> '',
			'newPrice'		=> '',
			'price'			=> '$800'
		),
		array(
			'product_name' => 'Ranch Dressing with Avocado Oil, Dairy-Free',
			'productImageURL' => 'assets/images/organic/sm-5.jpg',
			'oldPrice' 		=> '$3,788.00',
			'newPrice'		=>'$4,780.00',
			'price'			=> ''
		),
		array(
			'product_name' => 'Avocado Oil Mayo',
			'productImageURL' => 'assets/images/organic/sm-6.jpg',
			'oldPrice' 		=> '',
			'newPrice'		=> '',
			'price'			=> '$600'
		),
		array(
			'product_name' => 'Organic Fruit Strips, Strawberry',
			'productImageURL' => 'assets/images/organic/sm-7.jpg',
			'oldPrice' 		=> '$3,788.00',
			'newPrice'		=>'$4,780.00',
			'price'			=> ''
		),
		array(
			'product_name' => 'Organic Creamy Peanut Butter',
			'productImageURL' => 'assets/images/organic/sm-8.jpg',
			'oldPrice' 		=> '',
			'newPrice'		=> '',
			'price'			=> '$800'
		)	
		);

		$column=4;
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

		<div class="landscape-product product">
			<?php display_card_product($product['productImageURL'], $product['oldPrice'], $product['newPrice'], $product['price'], $product['product_name']) ; ?>
		</div><!-- .landscape-product -->	

		
	<?php endforeach; ?>
</div>