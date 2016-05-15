<div style="min-height: 100vh" class="flex flex-column col-12 justify-center items-center">
	<a href="<?= esc_url(home_url('/')); ?>">
		<?php get_template_part( 'templates/logo', 'jc' ); ?>
	</a>
	<?php get_template_part( 'templates/page', 'title' ); ?>
	<?php get_search_form(); ?>
</div>