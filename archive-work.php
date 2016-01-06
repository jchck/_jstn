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
	<h1 class="moz-mb-20" data-fitter-happier-text>Work Portfolio</h1>
	<div class="row center-xs">

		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

		<article <?php post_class('col-md-7 col-sm-10 col-xs-12 flex p0'); ?>>
			<a href="<?php the_permalink(); ?>" class="color-box color-targeting row middle-xs center-xs p3">
				<div class="col-md col-sm col-xs-4">
					<?php if (get_field('project_svg_logo')) {
						the_field('project_svg_logo');
					} else {
						get_template_part( 'templates/launches', 'jframe' );
					} ?>
				</div>
				<div class="col-md-10 col-sm-9 col-xs-12">
					<h3 class="mt0 ml1-md"><?php the_title(); ?></h3>
					<p class="m0 ml1-md"><?php the_field('project_summary') ?></p>
				</div>
			</a>
		</article>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</div>