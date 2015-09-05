<div class="container-fluid wrap">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<div class="row middle-sm">
			<div class="col-sm-6 col-xs-12">
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
			<div class="col-sm-6 last-sm col-xs-12 first-xs">
				<div>
					<div class="ipad">
						<?php get_template_part( 'templates/ipad' ); ?>
						<div class="ipad-screen"></div>
					</div>
					<p class="mt3 mb3 text-center"><a href="#" class="btn btn-blue">View Project</a></p>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>