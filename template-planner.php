<?php
/**
 * Template Name: Planner Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap">
		<h1 class="mt0 mb4 text-center h1-md">Project Planner</h1>
		<div class="row flex flex-middle">
			<div class="col-xs-12">
				<?php echo do_shortcode( '[gravityform id="6" title="false" description="false"]' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>