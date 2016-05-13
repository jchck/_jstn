<header>
	<?php
	if (has_nav_menu( 'primary_nav' )) :
		wp_nav_menu([ 'theme_location' => 'primary_nav', 'menu_class' => 'list-reset mt1 mb0 right-align', 'items_wrap' => '<ul class="%2$s">%3$s</ul>']);
	endif;
	?>
	<div class="pt3 pb1">
		<a href="<?= esc_url(home_url('/')); ?>">
			<?php get_template_part( 'templates/logo', 'jc' ); ?>
		</a>
	</div>
</header>