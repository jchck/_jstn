<footer class="py3">
	<div class="pt3 pb1 right-align">
		<a href="<?= esc_url(home_url('/')); ?>">
			<?php get_template_part( 'templates/logo', 'jc' ); ?>
		</a>
		<p style="margin-top:.5rem" class="h5">I'm currently looking for full-time work in New England.<br />If you're intrested in working together drop me a line:</p>
		<a href="mailto:hey@justinchick.com" class="h3 block">hey@justinchick.com</a>
	</div>
	<?php
	if (has_nav_menu( 'primary_nav' )) :
		wp_nav_menu([ 'theme_location' => 'primary_nav', 'menu_class' => 'list-reset slash mt0 mb1 right-left', 'items_wrap' => '<ul class="%2$s">%3$s</ul>']);
	endif;
	?>
</footer>