<div id="content" class="site-content">
	<div class="col-full">
		<div class="row">

			<nav class="woocommerce-breadcrumb">
				<a href="index">Home</a>
				<span class="delimiter"><i class="fa fa-angle-right"></i></span>
				Blog
			</nav><!-- .woocommerce-breadcrumb -->

			<div id="primary" class="content-area">
				<main id="main" class="site-main" >
					<?php @include 'inc/blocks/blog-post'; ?>
					<?php @include 'inc/components/blog-pagination'; ?>
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