<?php
/**
 * Template Name: Signup Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap signup-form">
		<div class="row center-xs">
			<div class="col-sm-11 col-xs">
				<h1 class="mt0 mb3 lead">Do you want to join the all the amazing people reading my newsletter about living as a digital nomad, freelancing, and creativity every week?</h1>
				<div class="row">
					<div class="col-sm-6">
						<p>Would you like my latest photography and stories delivered fresh to your inbox every Wednesday morning?</p>
						<p>Do you like trains, hummus, and/or cats?</p>
					</div>
				</div>
				<p class="m0">Then I'd like for you to answer these two simple questions:</p>
				<?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>