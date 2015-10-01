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
				<div class="row center-xs hidden-xs">
					<div class="col-xs-10">
						<div class="row middle-sm">
							<div class="col-sm">
								<p>Would you like my latest photography (like that shot there) and stories delivered fresh to your inbox every Wednesday morning?</p>
								<p>Do you like trains, hummus, and/or cats?</p>
							</div>
							<div class="col-sm">
								<div id="instafeed"></div>
							</div>	
						</div>
					</div>
				</div>
				<p class="mt3 mb0">If you answered yes <span class="hidden-xs">to any of those,</span> I've got two more questions for you:</p>
				<?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>