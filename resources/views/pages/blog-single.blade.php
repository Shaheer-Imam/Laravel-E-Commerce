<div id="content" class="site-content">
	<div class="col-full">
		<div class="row">

		<nav class="woocommerce-breadcrumb">
			<a href="index">Home</a>
			<span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
			<a href="{{route("category")}}">Laptops</a><span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i>
			</span>Tech Terms you should know before your adventure
		</nav><!-- .woocommerce-breadcrumb -->

		<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<?php @include 'inc/blocks/blog-single-post'; ?>
					<?php @include 'inc/components/post-author-info'; ?>
					<?php @include 'inc/components/post-navigation'; ?>
					<?php @include 'inc/components/blog-comments-area'; ?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<div id="secondary" class="sidebar-blog widget-area" role="complementary">
				<?php @include 'inc/components/sidebar/search-widget'; ?>
				<?php @include 'inc/components/sidebar/text-widget'; ?>
				<?php @include 'inc/components/sidebar/category-widget'; ?>
				<?php @include 'inc/components/sidebar/post-carousel-widget'; ?>
				<?php @include 'inc/components/sidebar/tag-widget'; ?>
				
			</div><!-- .sidebar-blog -->
		</div><!-- .row -->
	</div><!-- .col-full -->
</div><!-- #content -->