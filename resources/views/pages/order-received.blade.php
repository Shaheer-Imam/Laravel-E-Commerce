<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index">Home</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
				<a href="index?page=checkout">Checkout</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Order received
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<div class="page hentry">

						<div class="entry-content">
							<div class="woocommerce">
							 	<div class="woocommerce-order">
							
									<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Thank you. Your order has been received.</p>

									<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

										<li class="woocommerce-order-overview__order order">
											Order number:<strong>3001</strong>
										</li>

										<li class="woocommerce-order-overview__date date">
											Date:<strong>November 6, 2017</strong>
										</li>

										
										<li class="woocommerce-order-overview__total total">
											Total:<strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,476.99</span></strong>
										</li>

										<li class="woocommerce-order-overview__payment-method method">
												Payment method:	<strong>Direct bank transfer</strong>
										</li>
										
									</ul><!-- .woocommerce-order-overview -->

								
									<section class="woocommerce-order-details">
										<h2 class="woocommerce-order-details__title">Order details</h2>

										<?php @include 'inc/components/order-received-table'; ?>
									</section><!-- .woocommerce-order-details -->

							
								</div><!-- .woocommerce-order -->
							</div><!-- .woocommerce -->
						</div><!-- .entry-content -->
					</div><!-- .hentry -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->