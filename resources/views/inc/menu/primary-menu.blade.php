<nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
	<ul id="menu-primary-menu" class="nav yamm">
		<li class="sale-clr yamm-fw menu-item animate-dropdown">
			<a title="Super deals" href="{{route("category")}}">Super deals</a>
		</li>

		<li class="menu-item menu-item-has-children animate-dropdown dropdown">
			<a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Mother`s Day <span class="caret"></span></a>
			<ul role="menu" class=" dropdown-menu">
				<li class="menu-item animate-dropdown">
					<a title="Wishlist" href="{{route("wishlist")}}">Wishlist</a>
				</li>

				<li class="menu-item animate-dropdown">
					<a title="Add to compare" href="index?page=compare">Add to compare</a>
				</li>

				<li class="menu-item animate-dropdown">
					<a title="About Us" href="index?page=about">About Us</a>
				</li>

				<li class="menu-item animate-dropdown">
					<a title="Track Order" href="index?page=track-your-order">Track Order</a>
				</li>
			</ul><!-- .dropdown-menu -->
		</li>
		
		<li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
			<a title="Pages" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Pages <span class="caret"></span></a>
			@include('inc/menu/mega-menu')
		</li>

		<li class="menu-item animate-dropdown">
			<a title="Logitech Sale" href="{{route("category")}}">Logitech Sale</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a title="Headphones Sale" href="{{route("category")}}">Headphones Sale</a>
		</li>
		
		<li class="techmarket-flex-more-menu-item dropdown">
			<a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
			<ul class="overflow-items dropdown-menu"></ul><!-- . -->
		</li>
	</ul><!-- .nav -->
</nav><!-- .primary-navigation -->
