<?php if( $page=='home-v3' || $page=='home-v4' || $page=='home-v7' || $page=='home-v8') : ?> 	
	<div class="top-bar top-bar-v2">
		@include('top-bar-v2'); 
	</div><!-- .top-bar-v2 -->
<?php  endif; ?>

<header id="masthead" class="site-header header-v2" style="background-image: none; ">
	<div class="col-full desktop-only">
		<div class="row">

			@include('inc.header.logo')

			{{--  @include('inc.menu.department-menu')  --}}

			@include('inc.header.navbar-search') 

			@include('inc.header.navbar-right') 
			
		</div><!-- /.row -->

		<div class="techmarket-sticky-wrap">
			<div class="row">

				@include('inc.menu.navbar-primary')		

			</div><!-- /.row -->
		</div><!-- .techmarket-sticky-wrap -->
		
	</div><!-- .col-full -->
	
	@include('inc.header.handheld-header')

</header><!-- .header-v2 -->
<!-- ============================================================= Header End ============================================================= -->