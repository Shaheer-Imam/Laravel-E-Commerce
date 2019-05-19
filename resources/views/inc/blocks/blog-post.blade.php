<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
		if($page=='blog-v1' || $page=='blog-fullwidth') {
			$productImage = array(
				1 => array('product_image' => 'assets/images/blog/1.jpg'),
				2 => array('product_image' => 'assets/images/blog/2.jpg'),
				3 => array('product_image' => 'assets/images/blog/3.jpg'),
				4 => array('product_image' => 'assets/images/blog/4.png'),
				5 => array('product_image' => 'assets/images/blog/4.jpg'),
				6 => array('product_image' => 'assets/images/blog/5.jpg')
					
			);
		}
		
		else if($page=='blog-v2') {
	        $productImage = array(
				1 => array('product_image' => 'assets/images/blog/1-1.jpg'),
				2 => array('product_image' => 'assets/images/blog/1-2.jpg'),
				3 => array('product_image' => 'assets/images/blog/1-3.jpg'),
				4 => array('product_image' => 'assets/images/blog/1-4.png'),
				5 => array('product_image' => 'assets/images/blog/1-4.jpg'),
				6 => array('product_image' => 'assets/images/blog/1-5.jpg')
					
			);
	    }
	

	$productName = array(
		1 => array('product_name' => 'Tech Terms you should know before your adventure'),
		2 => array('product_name' => 'How to build your first 4k ready Desktop PC'),
		3 => array('product_name' => 'Top 10 Best Graphical Games for testing your Hardware'),
		4 => array('product_name' => '5 Tips to how find a place for your Wide screen Monitor'),
		5 => array('product_name' => 'Why you should choose dedicated Desktop PC Computer'),
		6 => array('product_name' => 'Most comfortable Gaming Seats for Playing Station')

	);
	

?>
<?php for ($i=1; $i < 7; $i++) { ?>	
	<article class="post format-image hentry">

		<div class="media-attachment">
			<div class="post-thumbnail">
				<a href="index?page=blog-single">
				<img alt="" class="wp-post-image" src="<?php echo $productImage[$i]['product_image'] ?>"></a>
			</div>
		</div><!-- .media-attachment -->


		<div class="content-body">
			<header class="entry-header">
				<h1 class="entry-title">
					<a rel="bookmark" href="index?page=blog-single"><?php echo $productName[$i]['product_name'] ?></a>
				</h1><!-- .entry-title -->	

				<div class="entry-meta">
					<span class="cat-links">
						<a href="index?page=blog-single" rel="category tag">Laptops</a>				
					</span>

					<span class="posted-on">
						<a href="index?page=blog-single" rel="bookmark">
							<time datetime="2017-03-23T08:06:09+00:00" class="entry-date published">March 23, 2017</time> 
							<time datetime="2017-06-22T10:40:23+00:00" class="updated">June 22, 2017</time>
						</a>
					</span>

					<span class="author">
						<a title="Posts by Jane Smith" href="#" rel="author" >Jane Smith</a>				
					</span>


				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">

				<p>A desktop computer is a computer that is designed to stay in a single location. It may be a tower or an all-in-one PC.</p>

			</div><!-- .post-excerpt -->

			<div class="post-readmore">
				<a class="btn btn-primary" href="index?page=blog-single">Read More</a>
			</div><!-- .post-readmore -->

			<span class="comments-link">
				<a href="index?page=blog-single#comments">Leave a comment</a>

			</span><!-- .comments-link -->
		</div>

	</article><!-- .post-->

<?php } ?>










<article class="post format-image hentry">

	<div class="media-attachment">
		<iframe width="870" height="165" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229791977&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
	</div><!-- .media-attachment -->


	<div class="content-body">
		<header class="entry-header">
			<h1 class="entry-title">
				<a rel="bookmark" href="index?page=blog-single">Robot Wars – Now Closed – Post with Audio</a>
			</h1><!-- .entry-title -->		
			<div class="entry-meta">
				<span class="cat-links">
					<a rel="category tag" href="index?page=blog-single">Design</a>,
					<a rel="category tag" href="index?page=blog-single">News</a>				
				</span>

				<span class="posted-on">
					<a rel="bookmark" href="index?page=blog-single">
						<time datetime="2017-03-23T08:06:09+00:00" class="entry-date published">March 23, 2017</time> 
					</a>
				</span>

				<span class="author">
					<a rel="author" title="Posts by Jane Smith" href="#">Jane Smith</a>				
				</span>


			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">

			<p>A desktop computer is a computer that is designed to stay in a single location. It may be a tower or an all-in-one PC.</p>

		</div><!-- .post-excerpt -->

		<div class="post-readmore">
			<a class="btn btn-primary" href="index?page=blog-single">Read More</a>
		</div><!-- .post-readmore -->

		<span class="comments-link">
			<a href="index?page=blog-single#comments">Leave a comment</a>

		</span><!-- .comments-link -->
	</div>

</article><!-- .post-->


<article class="post format-quote hentry">

	<div class="entry-content">

		<blockquote>
			<p>Quisque a commodo lectus. Nunc vel dolor sed libero venenatis egestas. Cras non volutpat enim. Cras molestie purus id lorem sodales, in facilisis erat tristique. Aliquam luctus orci aliquet augue eleifend.</p>
			<cite> Steve Kowalsky</cite>
		</blockquote>

	</div><!-- .entry-content -->

</article><!-- .post-->

<article class="post format-link hentry">

	<div class="entry-content">
		<p>If you are looking for a developer on ThemeForest &ndash; check out the link</p>
			<p>
				<a target="_blank" href="http://wwww.transvelo.com">
					<span>http://wwww.transvelo.com</span>
				</a>
			</p>
	</div><!-- .entry-content -->

</article>
