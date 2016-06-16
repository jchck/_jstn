<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'templates/resume', 'intro' ); ?>

	<?php get_template_part( 'templates/resume', 'professional' ); ?>

	<?php get_template_part( 'templates/resume', 'skills' ); ?>
	
	<?php get_template_part( 'templates/resume', 'projects' ); ?>

	<?php get_template_part( 'templates/resume', 'edu') ?>
<?php endwhile; ?>