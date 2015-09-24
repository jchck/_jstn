<?php
/**
 * Template Name: Signup Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap">
		<?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
	</div>
<?php endwhile; ?>