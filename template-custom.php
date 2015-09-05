<?php
/**
 * Template Name: Custom Template
 */
?>

<div class="container-fluid wrap">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<div class="row middle-sm">
			<div class="col-sm-6">
				<p>Vivamus metus felis, viverra eu enim nec, tempus volutpat diam. In ac neque vitae lacus aliquet elementum quis in tellus. Nulla porttitor interdum risus eu pharetra. Donec tortor purus, maximus nec scelerisque eu, sodales eu augue. Cras eget erat non nisi egestas porttitor. Curabitur gravida mauris quis dui convallis porttitor. Nunc lacinia eleifend elementum. Quisque dignissim urna a lorem rutrum, quis pulvinar quam laoreet. Phasellus convallis urna dui, vitae malesuada libero dignissim sit amet. Proin eget tellus in arcu finibus mollis nec ut leo. Proin aliquet auctor ante ac venenatis. Praesent ut elit dignissim, mattis enim non, ultricies tellus. Morbi odio elit, porttitor ut eros id, placerat fermentum neque. Vivamus at varius erat. Donec ac eros ut orci vulputate tempor. Ut sit amet sodales justo, rhoncus gravida diam.
				</p>
			</div>
			<div class="col-sm-6">
				<?php get_template_part( 'templates/ipad' ); ?>
			</div>
		</div>
		<?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>
</div>
