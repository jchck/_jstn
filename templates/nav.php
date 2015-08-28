<nav id="nav" role="navigation">
	<a href="#" class="btn btn-red mr2 visible-xs">Hire Me</a>
	<?php
	if (has_nav_menu('primary_navigation')) :
	  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
	endif;
	?>
</nav>