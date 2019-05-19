<div class="shop-control-bar">
	<div class="handheld-sidebar-toggle">
		<button type="button" class="btn sidebar-toggler">
		<i class="fa fa-sliders"></i><span>Filters</span>
		</button>
	</div><!-- .handheld-sidebar-toggle -->
	
	<h1 class="woocommerce-products-header__title page-title">Shop</h1>
	<ul role="tablist" class="shop-view-switcher nav nav-tabs">
		<li class="nav-item">
			<a href="#grid" title="Grid View" data-toggle="tab" class="nav-link">
			<i class="tm tm-grid-small"></i>
			</a>
		</li>

		<li class="nav-item">
			<a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
			<i class="tm tm-grid"></i>
			</a>
		</li>

		<li class="nav-item">
			<a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link">
			<i class="tm tm-listing-large"></i>
			</a>
		</li>

		<li class="nav-item">
			<a href="#list-view" title="List View" data-toggle="tab" class="nav-link active">
			<i class="tm tm-listing"></i>
			</a>
		</li>

		<li class="nav-item">
			<a href="#list-view-small" title="List View Small" data-toggle="tab" class="nav-link ">
			<i class="tm tm-listing-small"></i>
			</a>
		</li>
	</ul><!-- .shop-view-switcher -->

	<form class="form-techmarket-wc-ppp" method="POST">
		<select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
			<option value="20">Show 20</option>
			<option value="40">Show 40</option>
			<option value="-1">Show All</option>
		</select>
		<input type="hidden" value="5" name="shop_columns">
		<input type="hidden" value="15" name="shop_per_page">
		<input type="hidden" value="right-sidebar" name="shop_layout">
	</form><!-- .form-techmarket-wc-ppp -->

	<form method="get" class="woocommerce-ordering">
		<select class="orderby" name="orderby">
			<option value="popularity">Sort by popularity</option>
			<option value="rating">Sort by average rating</option>
			<option selected="selected" value="date">Sort by newness</option>
			<option value="price">Sort by price: low to high</option>
			<option value="price-desc">Sort by price: high to low</option>
		</select>
		<input type="hidden" value="5" name="shop_columns">
		<input type="hidden" value="15" name="shop_per_page">
		<input type="hidden" value="right-sidebar" name="shop_layout">
	</form><!-- .woocommerce-ordering -->


	<nav class="techmarket-advanced-pagination">
		<form class="form-adv-pagination" method="post">
			<input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
		</form> of 5<a href="#" class="next page-numbers">→</a>
	</nav><!-- .techmarket-advanced-pagination -->
</div><!-- .shop-control-bar -->