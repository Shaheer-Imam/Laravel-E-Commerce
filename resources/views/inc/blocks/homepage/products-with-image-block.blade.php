<?php
require 'inc/components/product-image';
$column = 5;
?>

<section class="section-products-with-image">
	<header class="section-header">
		<div class="col-full">
			<div class="row">
				<div class="product-info">
					<h2 class="section-title">Desktops PCs</h2>
					<div class="description">Donec id malesuada elit. Donec tempor sit amet est ac blandit. Phasellus ac sem nisl. Vestibulum aliquam, ligula in pretium congue, massa felis ultrices metus, nec mattis elit diam lobortis justo. Ut dapibus gravida eros ac bibendum. Phasellus ac tempus libero. Mauris eleifend, mi at viverra scelerisque, dolor leo luctus justo, id fermentum tellus nisl eget est.</div>
				</div>
				<div class="product-image">
					<img alt="" src="/assets/images/products/landing-1.png">
				</div>
			</div>
		</div>
	</header><!-- .section-header -->

	<div class="woocommerce columns-5">
		<div class="products">
            <?php for ($i=1; $i < 6; $i++) { ?>
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
                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                        <span class="price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>57.99</span>
                        </span><!-- .price -->

                        <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                    </a><!-- .woocommerce-LoopProduct-link -->
                    <div class="techmarket-product-rating"><div class="star-rating" title="Rated 0 out of 5"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span></div>

                    <div class="hover-area">
                        <a class="button" href="{{route("cart")}}">Add to cart</a>
                        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
                    </div><!-- .hover-area -->
                </div><!-- .product -->
            <?php } ?>

        </div><!-- .products -->
    </div><!-- .woocommerce -->

	<a href="{{route("shop")}}" class="load-more-button">Shop All Desktops PCs</a>
</section><!-- .section-products-with-image -->

<section class="section-products-with-image">
	<header class="section-header">
		<div class="col-full">
			<div class="row">
				<div class="product-info">
					<h2 class="section-title">Gaming Laptops</h2>
					<div class="description">Donec id malesuada elit. Donec tempor sit amet est ac blandit. Phasellus ac sem nisl. Vestibulum aliquam, ligula in pretium congue, massa felis ultrices metus, nec mattis elit diam lobortis justo. Ut dapibus gravida eros ac bibendum. Phasellus ac tempus libero. Mauris eleifend, mi at viverra scelerisque, dolor leo luctus justo, id fermentum tellus nisl eget est.</div>
				</div>
				<div class="product-image">
					<img alt="" src="/assets/images/products/landing-1.1.png">
				</div>
			</div>
		</div>
	</header><!-- .section-header -->

	<div class="woocommerce columns-5">
		<div class="products">
            <?php for ($i=1; $i < 11; $i++) { ?>
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
                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                        
                        <span class="price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>57.99</span>
                        </span><!-- .price -->

                        <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                    </a><!-- .woocommerce-LoopProduct-link -->
                    <div class="techmarket-product-rating"><div class="star-rating" title="Rated 0 out of 5"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span></div>

                    <div class="hover-area">
                        <a class="button" href="{{route("cart")}}">Add to cart</a>
                        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
                    </div><!-- .hover-area -->
                </div><!-- .product -->
            <?php } ?>

        </div><!-- .products -->
    </div><!-- .woocommerce -->
	

	<a href="{{route("shop")}}" class="load-more-button">Shop All Desktops PCs</a>
</section><!-- .section-products-with-image -->

<section class="section-products-with-image">
	<header class="section-header">
		<div class="col-full">
			<div class="row">
				<div class="product-info">
					<h2 class="section-title">Accesories</h2>
					<div class="description">Donec id malesuada elit. Donec tempor sit amet est ac blandit. Phasellus ac sem nisl. Vestibulum aliquam, ligula in pretium congue, massa felis ultrices metus, nec mattis elit diam lobortis justo. Ut dapibus gravida eros ac bibendum. Phasellus ac tempus libero. Mauris eleifend, mi at viverra scelerisque, dolor leo luctus justo, id fermentum tellus nisl eget est.</div>
				</div>
				<div class="product-image">
					<img alt="" src="/assets/images/products/landing-1.2.png">
				</div>
			</div>
		</div>
	</header><!-- .section-header -->

	<div class="woocommerce columns-7">
		<div class="products">
            <?php for ($i=1; $i < 8; $i++) { ?>
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
                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("product")}}">
                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">
                        
                        <span class="price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>57.99</span>
                        </span><!-- .price -->
                        
                        <h2 class="woocommerce-loop-product__title">On-ear Wireless NXTG</h2>
                    </a><!-- .woocommerce-LoopProduct-link -->
                    <div class="techmarket-product-rating"><div class="star-rating" title="Rated 0 out of 5"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div> <span class="review-count">(0)</span></div>

                    <div class="hover-area">
                        <a class="button" href="{{route("cart")}}">Add to cart</a>
                        <a class="add-to-compare-link" href="index?page=compare">Add to compare</a>
                    </div><!-- .hover-area -->
                </div><!-- .product -->
            <?php } ?>

        </div><!-- .products -->
    </div><!-- .woocommerce -->

	<a href="{{route("shop")}}" class="load-more-button">Shop All Desktops PCs</a>
</section><!-- .section-products-with-image -->