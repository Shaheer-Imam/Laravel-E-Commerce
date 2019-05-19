@include('inc.header.top-bar-v1'); 

<header id="masthead" class="site-header header-v1" style="background-image: none; ">
	<div class="col-full desktop-only">
		
		<div class="techmarket-sticky-wrap">
			<div class="row">

				@include('inc.header.logo')

				@include('inc.menu.primary-menu')

				@include('inc.menu.secondary-menu')

			</div><!-- /.row -->
		</div><!-- .techmarket-sticky-wrap -->

		<div class="row align-items-center">

			@include('inc.menu.department-menu') 
									
			@include('inc.header.navbar-search') 

			@include('inc.header.navbar-right')

		</div><!-- /.row -->
	</div><!-- .col-full -->

	@include('inc.header.handheld-header')

</header><!-- .header-v1 -->
<!-- ============================================================= Header End ============================================================= -->
