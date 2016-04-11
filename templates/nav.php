<nav id="nav">
	<a href="<?= esc_url(home_url('hire-justin')); ?>" class="btn btn-blue m2 visible-xs">Hire Me</a>
	<?php
	if (has_nav_menu('primary_navigation')) :
	  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav mt2']);
	endif;
	?>
</nav>