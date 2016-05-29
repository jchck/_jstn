<?php
/*
	Template Name: Landing SEO
*/
;?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'templates/header', 'landing' ); ?>

<?php endwhile; ?>