<footer class="site-footer footer-v1">
	<div class="col-full">
		
		@include ('inc/footer/footer-top-row')

		<div class="footer-widgets-block">
			<div class="row">
				<div class="footer-contact">
					
					@include ('inc/footer/logo')
					@include ('inc/footer/contact-payment-wrap')
					
				</div><!-- .footer-contact -->
						
				@include ('inc/footer/footer-widgets-1')
			</div><!-- .row -->
		</div><!-- .footer-widgets-block -->
		
		@include ('inc/footer/footer-site-info')
	</div><!-- .col-full -->
</footer><!-- .site-footer -->