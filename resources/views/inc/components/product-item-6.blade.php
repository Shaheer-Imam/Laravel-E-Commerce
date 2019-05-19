<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column = 4;

    $products = array(
        array(
            'productImageURL' => 'assets/images/products/1.jpg',
            'oldPrice' =>'459.00',
            'newPrice' =>'309.95',
            'product_name' => 'Smart Watches 3 SWR50'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/2.jpg',
            'price' =>'456.00',
            'product_name' => 'ZenBook 3 Ultrabook 8GB 512SSD W10'
        
        ),
        array(
            'productImageURL' => 'assets/images/products/3.jpg',
            'price' =>'456.00',
            'product_name' => 'On-ear Wireless NXTG'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/4.jpg',
            'price' =>'456.00',
            'product_name' => '4K Action Cam with  Wi-Fi & GPS'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/5.jpg',
            'price' =>'456.00',
            'product_name' => 'XONE Wireless Controller'
        
        ),
        array(
            'productImageURL' => 'assets/images/products/6.jpg',
            'oldPrice' =>'999.00',
            'newPrice' =>'789.95',
            'product_name' => 'Gear Virtual Reality 3D with Bluetooth Glasses'
            
            
        ),
        array(
            'productImageURL' => 'assets/images/products/7.jpg',
            'price' =>'456.00',
            'product_name' => 'Bluetooth on-ear PureBass Headphones'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/8.jpg',
            'price' =>'456.00',
            'product_name' => 'Video & Air Quality Monitor'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/9.jpg',
            'price' =>'456.00',
             'product_name' => 'Watch Stainless with Grey Suture Leather Strap'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/10.jpg',
            'price' =>'456.00',
            'product_name' => 'Xtreme ultimate splashproof  portable speaker'
            
        ),
        array(
            'productImageURL' => 'assets/images/products/11.jpg',
            'price' =>'456.00',
            'product_name' => 'Xtreme ultimate splashproof  portable speaker'
            
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

   
    <?php display_no_hover_product( $product ); ?>
   
    <?php endforeach;?>
</div>