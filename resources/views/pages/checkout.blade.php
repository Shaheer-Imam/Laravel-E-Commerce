<div id="content" class="site-content">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index.php">Home</a>
				<span class="delimiter">
					<i class="tm tm-breadcrumbs-arrow-right"></i>
				</span>
				Checkout
			</nav><!-- .woocommerce-breadcrumb -->

			<div class="content-area" id="primary">
				<main class="site-main" id="main">
			
					<div class="type-page hentry">
						
						<div class="entry-content">
							<div class="woocommerce">
								<div class="woocommerce-info" >Returning customer? <a data-toggle="collapse" href="#login-form" aria-expanded="false" aria-controls="login-form" class="showlogin">Click here to login</a>
								</div>
								<div class="collapse" id="login-form">
									<form method="post" class="woocomerce-form woocommerce-form-login login">

										<p class="before-login-text">
											Vestibulum lacus magna, faucibus vitae dui eget, aliquam fringilla. 
											In et commodo elit. Class aptent taciti sociosqu ad litora.		
										</p>

										<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>

										<p class="form-row form-row-first">
											<label for="username">Username or email <span class="required">*</span></label>
											<input type="text" id="username" name="username" class="input-text">
										</p>

										<p class="form-row form-row-last">
											<label for="password">Password <span class="required">*</span></label>
											<input type="password" id="password" name="password" class="input-text">
										</p>

										<div class="clear"></div>


										<p class="form-row">

											<input type="submit" value="Login" name="login" class="button">
											
											<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
												<input type="checkbox" value="forever" id="rememberme" name="rememberme" class="woocommerce-form__input woocommerce-form__input-checkbox"> <span>Remember me</span>
											</label>
										</p>

										<p class="lost_password">
											<a href="#">Lost your password?</a>
										</p>

										<div class="clear"></div>


									</form>
								</div><!-- .collapse -->

								<div class="woocommerce-info">Have a coupon? <a data-toggle="collapse" href="#checkoutCouponForm" aria-expanded="false" aria-controls="checkoutCouponForm" class="showlogin">Click here to enter your code</a>
								</div>
								<div class="collapse" id="checkoutCouponForm">
									<form method="post" class="checkout_coupon">

											<p class="form-row form-row-first">
												<input type="text" value="" id="coupon_code" placeholder="Coupon code" class="input-text" name="coupon_code">
											</p>

											<p class="form-row form-row-last">
												<input type="submit" value="Apply coupon" name="apply_coupon" class="button">
											</p>

											<div class="clear"></div>
									</form>
								</div><!-- .collapse -->

								 @include ('inc.components.checkout-table')

							</div><!-- .woocommerce -->
						</div><!-- .entry-content -->
					</div><!-- #post-## -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->