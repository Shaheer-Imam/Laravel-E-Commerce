<nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
	<button class="btn navbar-toggler" type="button">	
		<i class="tm tm-departments-thin"></i>
		<span>Menu</span>
	</button>

	<div class="handheld-navigation-menu">
		<span class="tmhm-close">Close</span>
		<ul id="menu-departments-menu-1" class="nav">
			<li class="highlight menu-item animate-dropdown">
			 	<a title="Value of the Day" href="{{route("category")}}">Value of the Day</a>
			</li>

			<li class="highlight menu-item animate-dropdown">
			 	<a title="Top 100 Offers" href="{{route("category")}}">Top 100 Offers</a>
			</li>

			<li class="highlight menu-item animate-dropdown">	
				<a title="New Arrivals" href="{{route("category")}}">New Arrivals</a>
			</li>

			<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
				<a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Computers &#038; Laptops <span class="caret"></span></a>
				<?php @include'department-menu-megamenu-1'; ?>
			</li>

			<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
				<a title="Cameras &amp; Photo" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Cameras &#038; Photo <span class="caret"></span></a>
				<?php @include'department-menu-megamenu-2'; ?>
			</li>

			<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
				<a title="Smart Phones &amp; Tablets" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Smart Phones &#038; Tablets 	<span class="caret"></span></a>
				<?php @include'department-menu-megamenu-1'; ?>
			</li>

			<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
				<a title="Video Games &amp; Consoles" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Video Games &#038; Consoles <span class="caret"></span></a>
				<?php @include'department-menu-megamenu-2'; ?>
			</li>

			<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
				<a title="TV &amp; Audio" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">TV &#038; Audio <span class="caret"></span></a>
				<?php @include'department-menu-megamenu-1'; ?>
			</li>

			<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
				<a title="Car Electronic &amp; GPS" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Car Electronic &#038; GPS <span class="caret"></span></a>
				<?php @include'department-menu-megamenu-2'; ?>
			</li>

			<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
				<a title="Accesories" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Accesories <span class="caret"></span></a>
				<?php @include'department-menu-megamenu-1'; ?>
			</li>

			<li class="menu-item animate-dropdown">
				<a title="Gadgets" href="{{route("shop")}}">Gadgets</a>
			</li>

			<li class="menu-item animate-dropdown">
				<a title="Virtual Reality" href="{{route("shop")}}">Virtual Reality</a>
			</li>			
		</ul>
	</div><!-- .handheld-navigation-menu -->
</nav><!-- .handheld-navigation -->