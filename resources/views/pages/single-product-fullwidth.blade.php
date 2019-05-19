<div id="content" class="site-content" tabindex="-1">
	<div class="col-full">
		<div class="row">
			<nav class="woocommerce-breadcrumb">
				<a href="index">Home</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span><a href="{{route("category")}}">TV & Video</a>
				<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>{{$product->product_name}}
			</nav><!-- .woocommerce-breadcrumb -->
			
			@foreach (['danger', 'warning', 'success', 'info'] as $msg)
			@if(Session::has($msg))
			<div id="form-messages" class="alert alert-{{$msg}} col-md-12" role="alert">
				{{ Session::get($msg) }}
			</div>
			@endif
			@endforeach

			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<div class="product product-type-simple">
						<div class="single-product-wrapper">
							@include('inc/blocks/single-product/single-product-images')
							@include('inc/blocks/single-product/single-product-summary')
						</div><!-- .single-product-wrapper -->
						
						@include('inc/blocks/single-product/related-products')

						@include('inc/blocks/single-product/woocommerce-tabs')

						@include('inc/blocks/homepage/recently-viewed-products')

						@include('inc/blocks/homepage/brands-carousel')
						
					</div><!-- .product -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->