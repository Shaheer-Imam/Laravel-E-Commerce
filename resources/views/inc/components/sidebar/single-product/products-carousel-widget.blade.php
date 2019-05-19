{{--  if( $page=='single-product-sidebar' || $page=='shop' || $page=='product-category' || $page=='shop-listing' || $page=='shop-extended' || $page=='shop-right-sidebar' || $page=='shop-listing-with-product-sidebar' || $page=='shop-listing-large') {  
	if( $page=='home-v5' || $page=='home-v6') {
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'rows'              => 4,
		'slidesPerRow'      => 1,
		'dots'				=> false,
		'arrows'			=> false,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#single-sidebar-carousel .custom-slick-nav'
			
	);
	
}  --}}

<?php
	$carousel_args = array(
		'infinite'          => false,
		'slidesToShow'		=> 1,
		'slidesToScroll'	=> 1,
		'rows'              => 2,
		'slidesPerRow'      => 1,
		'dots'				=> false,
		'arrows'			=> true,
		'prevArrow'			=> '<a href="#"><i class="tm tm-arrow-left"></i></a>',
		'nextArrow'			=> '<a href="#"><i class="tm tm-arrow-right"></i></a>',
		'appendArrows'		=> '#single-sidebar-carousel .custom-slick-nav'
			
	);	
?>


	

<div class="widget widget_techmarket_products_carousel_widget">
	<section id="single-sidebar-carousel" class="section-products-carousel">
		<header class="section-header">
			<h2 class="section-title">Latest Products</h2>
			<nav class="custom-slick-nav"></nav>
		</header><!-- .section-header -->

		<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="<?php echo htmlspecialchars( json_encode( $carousel_args ), ENT_QUOTES, 'UTF-8' ); ?>">
			<div class="container-fluid">
				<div class="woocommerce columns-1">
					<div class="products">
						@include('inc/blocks/homepage/landscape-product-widget')
					</div><!-- .products -->		
				</div><!-- .woocommerce -->				
			</div><!-- .container-fluid -->
		</div><!-- .products-carousel -->
	</section><!-- .section-products-carousel -->
</div><!-- .widget_techmarket_products_carousel_widget -->