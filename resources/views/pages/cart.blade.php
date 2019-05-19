<div id="content" class="site-content">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index">Home</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
				Cart
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<div class="type-page hentry">
						<div class="entry-content">
							<div class="woocommerce">
								<div class="cart-wrapper">
									@include ('inc/components/cart-table')
									@include ('inc/components/cart-collaterals')
								</div><!-- .cart-wrapper -->
							</div><!-- .woocommerce -->
						</div><!-- .entry-content -->
					</div><!-- .hentry -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->

<div class="col-full">
	@include ('inc/blocks/homepage/brands-carousel')
</div><!-- .col-full -->
