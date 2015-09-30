<?php
/**
 * Template Name: Signup Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap signup-form">
		<p>Bla bla bla signup.</p>
		<p>Bla bla bla you know what to do, right?</p>
		<?php echo do_shortcode( '[gravityform id="5" title="false" description="false"]' ); ?>
	</div>
<?php endwhile; ?>