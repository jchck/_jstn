<?php
    $args = array(
		//Type & Status Parameters
		'post_type'   => 'work',
		'post_status' => 'publish',
		
		//Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',
		
		//Pagination Parameters
		'posts_per_page'         => 5
			
		);

    $query = new WP_Query( $args );
?>
<div class="container-fluid wrap-12-launches">
	<h1 data-fitter-happier-text>Work Portfolio</h1>
	<div class="row center-xs">

		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

		<article <?php post_class('col-md-7 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?php the_permalink(); ?>" class="color-box color-targeting flex middle-xs p3">
				<?php if (get_field('project_svg_logo')) {
					the_field('project_svg_logo');
				} else {
					get_template_part( 'templates/launches', 'jframe' );
				} ?>
				<div class="width-100 ml2 mr2">
					<h3 data-fitter-happier-text><?php the_title(); ?></h3>
					<p class="m0"><?php the_field('project_summary') ?></p>
				</div>
			</a>
		</article>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</div>