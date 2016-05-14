<footer class="py3">
	<div class="pt3 pb1">
		<a href="<?= esc_url(home_url('/')); ?>">
			<?php get_template_part( 'templates/logo', 'jc' ); ?>
		</a>
	</div>
	<?php
	if (has_nav_menu( 'primary_nav' )) :
		wp_nav_menu([ 'theme_location' => 'primary_nav', 'menu_class' => 'list-reset slash mt0 mb1 right-align', 'items_wrap' => '<ul class="%2$s">%3$s</ul>']);
	endif;
	?>
</footer>