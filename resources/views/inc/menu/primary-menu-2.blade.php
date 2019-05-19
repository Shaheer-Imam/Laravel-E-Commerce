<nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
	<ul id="menu-primary-menu" class="nav yamm">
		
		<li class="menu-item animate-dropdown">
			<a href="{{route("category")}}">All Categories</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a href="{{route("category")}}">Computers</a>
		</li>

		<li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
			<a title="Pages" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Pages <span class="caret"></span></a>
			<?php @include 'inc/menu/mega-menu'; ?>
		</li>

		<li class="menu-item animate-dropdown">
			<a href="{{route("category")}}">Cameras</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a href="{{route("category")}}">Games</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a href="{{route("category")}}">Audio</a>
		</li>

		<li class="techmarket-flex-more-menu-item dropdown">
			<a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
			<ul class="overflow-items dropdown-menu">
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="primary-menu-item-70" class="menu-item animate-dropdown">
				 	<a title="ACCESORIES" href="{{route("category")}}">Accessories</a></li>

				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="primary-menu-item-71" class="menu-item animate-dropdown">
				    <a title="SALE" href="{{route("category")}}">Sale</a>
				</li>
			</ul>
		</li>

		
	</ul><!-- .nav -->
</nav><!-- .primary-navigation -->
