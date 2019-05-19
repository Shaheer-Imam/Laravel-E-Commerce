<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column = 5;    
?>

<?php

    $products = array(
        array(
            'wishlist' => '',
            'onsale'   => '',  
            'product_name' => 'Nereide',
            'productImageURL' => 'assets/images/glasses/1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'starrating' => 'true'

        ),
        array(
            'wishlist' => '',
            'onsale'   => '',  
            'product_name' => 'Hubble',
            'productImageURL' => 'assets/images/glasses/2.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Auriga',
            'productImageURL' => 'assets/images/glasses/3.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Octans',
            'productImageURL' => 'assets/images/glasses/4.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Dino',
            'productImageURL' => 'assets/images/glasses/5.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Barents',
            'productImageURL' => 'assets/images/glasses/6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Scott',
            'productImageURL' => 'assets/images/glasses/7.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Doria',
            'productImageURL' => 'assets/images/glasses/8.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Ara',
            'productImageURL' => 'assets/images/glasses/9.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Apus Air',
            'productImageURL' => 'assets/images/glasses/10.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Canopo Wide',
            'productImageURL' => 'assets/images/glasses/11.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
        ),
        array(
            'wishlist' => '',
            'onsale'   => '', 
            'product_name' => 'Anselm',
            'productImageURL' => 'assets/images/glasses/12.jpg',
            'price' =>'456.00',
            'starrating' => 'true'
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

   
    <?php display_product( $product ); ?>
   
    <?php endforeach;?>
</div>



