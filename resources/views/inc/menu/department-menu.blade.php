<div id="departments-menu" class="dropdown departments-menu">
	<button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="tm tm-departments-thin"></i><span>All Departments</span>
	</button>

	<ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
		<li class="highlight menu-item animate-dropdown">
		 	<a title="Value of the Day" href="index?page=home-v2">Value of the Day</a>
		</li>

		<li class="highlight menu-item animate-dropdown">
		 	<a title="Top 100 Offers" href="index?page=home-v3">Top 100 Offers</a>
		</li>

		<li class="highlight menu-item animate-dropdown">	
			<a title="New Arrivals" href="index?page=home-v4">New Arrivals</a>
		</li>

		 <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
			<a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Computers &#038; Laptops <span class="caret"></span></a>
			@include('inc.menu.department-menu-megamenu-1')
		</li>
		

		<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
			<a title="Cameras &amp; Photo" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Cameras &#038; Photo <span class="caret"></span></a>
			@include('inc.menu.department-menu-megamenu-2')
		</li>

		<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
			<a title="Smart Phones &amp; Tablets" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Smart Phones &#038; Tablets <span class="caret"></span></a>
			@include('inc.menu.department-menu-megamenu-1')
		</li>

		<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
			<a title="Video Games &amp; Consoles" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Video Games &#038; Consoles <span class="caret"></span></a>
			@include('inc.menu.department-menu-megamenu-2')
		</li>

		<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
			<a title="TV &amp; Audio" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">TV &#038; Audio <span class="caret"></span></a>
			@include('inc.menu.department-menu-megamenu-1')
		</li>

		<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
			<a title="Car Electronic &amp; GPS" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Car Electronic &#038; GPS <span class="caret"></span></a>
			@include('inc.menu.department-menu-megamenu-2')
		</li>

		<li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
			<a title="Accesories" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Accesories <span class="caret"></span></a>
			@include('inc.menu.department-menu-megamenu-1')
		</li>

		<li class="menu-item menu-item-type-custom animate-dropdown">
			<a title="Gadgets" href="index?page=landing-page-v1">Gadgets</a>
		</li>

		<li class="menu-item menu-item-type-custom animate-dropdown">
			<a title="Virtual Reality" href="index?page=landing-page-v2">Virtual Reality</a>
		</li>
	</ul>
</div><!-- .departments-menu -->