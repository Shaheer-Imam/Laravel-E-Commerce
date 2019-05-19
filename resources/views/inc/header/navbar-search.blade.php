<form class="navbar-search" method="get" action="index">
	<label class="sr-only screen-reader-text" for="search">Search for:</label>
	<div class="input-group">
		<input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products"/>
		<div class="input-group-addon search-categories popover-header">
			<select name='product_cat' id='product_cat' class='postform resizeselect'>
				<option value='0' selected='selected'>All Categories</option>
				<option class="level-0" value="television">Televisions</option>
				<option class="level-0" value="home-theater-audio">Home Theater &amp; Audio</option>
				<option class="level-0" value="headphones">Headphones</option>
				<option class="level-0" value="digital-cameras">Digital Cameras</option>
				<option class="level-0" value="cells-tablets">Cells &amp; Tablets</option>
				<option class="level-0" value="smartwatches">Smartwatches</option>
				<option class="level-0" value="games-consoles">Games &amp; Consoles</option>
				<option class="level-0" value="printer">Printer</option>
				<option class="level-0" value="tv-video">TV &amp; Video</option>
				<option class="level-0" value="home-entertainment">Home Entertainment</option>
				<option class="level-0" value="tvs">TVs</option>
				<option class="level-0" value="speakers">Speakers</option>
				<option class="level-0" value="computers-laptops">Computers &amp; Laptops</option>
				<option class="level-0" value="laptops">Laptops</option>
				<option class="level-0" value="ultrabooks">Ultrabooks</option>
				<option class="level-0" value="notebooks">Notebooks</option>
				<option class="level-0" value="desktop-pcs">Desktop PCs</option>
				<option class="level-0" value="mac-computers">Mac Computers</option>
				<option class="level-0" value="all-in-one-pc">All in One PC</option>
				<option class="level-0" value="audio-music">Audio &amp; Music</option>
				<option class="level-0" value="pc-components">PC Components</option>
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