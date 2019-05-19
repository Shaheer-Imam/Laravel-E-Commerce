<form class="navbar-search" method="get" action="index">
	<label class="sr-only screen-reader-text" for="search">Search for:</label>
	<div class="input-group">
		<input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products"/>
		<div class="input-group-addon search-categories popover-header">
			<select name='product_cat' id='product_cat' class='postform resizeselect'>
				<option value='0' selected='selected'>All Categories</option>
				<option class="level-0" value="television">Food &amp; Bevereages</option>
				<option class="level-0" value="home-theater-audio">Supplements</option>
				<option class="level-0" value="headphones">Beauty &amp; Personal care</option>
				<option class="level-0" value="digital-cameras">Sports &amp; Fitness</option>
				<option class="level-0" value="cells-tablets">Herbs &amp; Botanicals</option>
			</select>
		</div><!-- .input-group-addon -->
		
		<div class="input-group-btn input-group-append">
			<input type="hidden" id="search-param" name="post_type" value="product"/>
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-search"></i>
				<span class="search-btn">Search</span>
			</button>
		</div><!-- .input-group-btn -->
	</div><!-- .input-group -->
</form><!-- .navbar-search -->