<nav id="nav" role="navigation">
	<a href="<?= esc_url(home_url('hire-justin')); ?>" class="btn btn-blue m2 visible-xs">Hire Me</a>
	<?php
	if (has_nav_menu('primary_navigation')) :
	  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav mt2']);
	endif;
	?>
	<p class="m0 mt3 text-center border-top hidden-xs"><a href="<?= esc_url(home_url('follow-along')); ?>" class="btn btn-blue mt3 mb3">Get my Newsletter!</a></p>
</nav>