<nav id="navbar-primary" class="navbar-primary" aria-label="Navbar Primary" data-nav="flex-menu">
	<ul id="menu-navbar-primary" class="nav yamm">
		<li class="menu-item animate-dropdown">
			<a title="ALL CATEGORIES" href="{{route("category")}}">ALL CATEGORIES</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a title="COMPUTERS &amp; LAPTOPS" href="{{route("category")}}">COMPUTERS &#038; LAPTOPS</a>
		</li>

		<li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
			<a title="Pages" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Pages <span class="caret"></span></a>
			 @include('inc.menu.mega-menu')
		</li>

		<li class="menu-item animate-dropdown">
			<a title="CAMERAS &amp; PHOTO" href="{{route("category")}}">CAMERAS &#038; PHOTO</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a title="PHONES &amp; TABLETS" href="{{route("category")}}">PHONES &#038; TABLETS</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a title="GAMES &amp; CONSOLES" href="{{route("category")}}">GAMES &#038; CONSOLES</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a title="TV &amp; AUDIO" href="{{route("category")}}">TV &#038; AUDIO</a>
		</li>

		<li class="menu-item animate-dropdown">
			<a title="CAR ELECTRONIC &amp; GPS" href="{{route("category")}}">CAR ELECTRONIC &#038; GPS</a>
		</li>
		<li class="menu-item animate-dropdown">
			<a title="ACCESORIES" href="{{route("category")}}">ACCESORIES</a>
		</li>
		
		<li class="techmarket-flex-more-menu-item dropdown">
			<a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
			<ul class="overflow-items dropdown-menu"></ul>
		</li>
	</ul><!-- .nav -->
</nav><!-- .navbar-primary -->
