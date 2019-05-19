<?php
$productImage = array(
	1 => array('product_image' => 'assets/images/blog/sm-1.jpg'),
	2 => array('product_image' => 'assets/images/blog/sm-2.jpg'),
	3 => array('product_image' => 'assets/images/blog/sm-3.jpg'),
	4 => array('product_image' => 'assets/images/blog/5.png'),
	5 => array('product_image' => 'assets/images/blog/sm-4.jpg'),
	6 => array('product_image' => 'assets/images/blog/sm-5.jpg')
	);
?>

<section class="section-recent-posts-with-categories">
	<div class="center-block">
		<h2 class="section-title">Welcome in Gaming World.</h2>
		<div class="description">Nullam dignissim elit ut urna rutrum, a fermentum mi auctor. Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet. Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam erat volutpat.</div>
		<ul class="nav nav-inline categories">
			<li class="nav-item"><a href="index?page=blog-single" class="nav-link">Accessories</a></li>
			<li class="nav-item"><a href="index?page=blog-single" class="nav-link">Design</a></li>
			<li class="nav-item"><a href="index?page=blog-single" class="nav-link">Desktop PCs</a></li>
			<li class="nav-item"><a href="index?page=blog-single" class="nav-link">Events</a></li>
		</ul><!-- .nav -->
	</div><!-- .center-block -->

	<div class="post-items-wrap">
		<div class="post-items">
			<?php for ($i=1; $i < 7; $i++) { ?>
				<div class="post-item">
					<a href="index?page=blog-single" class="post-thumbnail">
						<img width="270" height="270" alt="" class="attachment-techmarket-blog-carousel size-techmarket-blog-carousel wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>">					
					</a>
					
					<div class="post-info">
						<h3 class="post-title">
						<a href="index?page=blog-single">Tech Terms you should know before your adventure</a></h3><p>A desktop computer is a computer that is designed to stay in a single location. It may be a tower or an all-in-one PC.</p>
						<a href="index?page=blog-single" class="btn-more">Read more</a>
					</div>
				</div><!-- .post-item -->
			<?php } ?>
		</div><!-- .post-items -->
	</div><!-- .post-items-wrap -->
</section><!-- .section-recent-posts-with-categories -->