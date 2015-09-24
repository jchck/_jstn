<nav id="nav" role="navigation">
	<a href="#" class="btn btn-blue m2 visible-xs">Hire Me</a>
	<?php
	if (has_nav_menu('primary_navigation')) :
	  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
	endif;
	?>
	<p class="m0 mt3 text-center border-top"><a href="<?= esc_url(home_url('signup')); ?>" class="btn btn-blue mt3 mb3">Want My Prospective?</a></p>
</nav>