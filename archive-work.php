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
	<h1 data-heading>Work Portfolio</h1>
	<p>The professional work of Justin Chick Vivamus non egestas mi. Morbi orci lorem, tincidunt ut justo at, interdum volutpat massa. Donec varius orci massa. Cras a sem a lorem aliquet eleifend eget ut augue. Vivamus eu lacus mi. Etiam pretium enim eget lorem dignissim pulvinar. Phasellus facilisis fringilla tempor. </p>
	<div class="row center-xs">

		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

		<article <?php post_class('col-md-7 col-sm-6 col-xs-12 flex p0'); ?>>
			<a href="<?php the_permalink(); ?>" class="launch-card flex middle-xs p3">
				<?php get_template_part( 'templates/launches', 'jframe' ); ?>
				<div class="card-text ml2 mr2">
					<h3 data-heading><?php the_title(); ?></h3>
					<p class="m0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</a>
		</article>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</div>