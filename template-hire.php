<?php
/**
 * Template Name: Hire Template
 */
use Roots\Sage\Date;
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap">
		<h1 class="mt0 text-center h1-md">It all starts with a conversation</h1>
		<p>I partner with individuals and organizations when I’m confident that a relationship can be beneficial for both of us.</p>
		<p class="mt3">I am available for <span class="strong">WordPress</span> and <span class="strong">front-end development</span> as well as <span class="strong">user experience design consulting</span>. I am currently scheduling projects to begin <span class="strong">mid-<?= Date\month(); ?></span>.</p>
		<h3 class="text-center h3-md">There are two ways we can work together</h3>
		<div class="row middle-xs">
			<div class="col-sm col-xs-12 mr2-sm ml2-sm mb3 mb0-sm">
				<a href="#lets-go" class="p3 work-box hire-cta flex flex-center border">
					<div>
						<p class="strong"><u>The Kitchen Sink</u></p>
						<p>Everything and then some -- strategy, design, development, UX, custom WordPress theming</p>
						<p class="m0 strong">$3,000+</p>
					</div>
				</a>
			</div>
			<div class="col-sm col-xs-12 mr2-sm ml2-sm">
				<a href="#lets-go" class="p3 work-box hire-cta flex flex-center border">
					<div>
						<p class="strong"><u>Just a Taste</u></p>
						<p>You pick my brain and I pick yours on the topic of your choice (provided it's in my wheelhouse)</p>
						<p class="m0 strong">$100 per hour, 1-hour minimum</p>
					</div>
				</a>
			</div>
		</div>
		<h3 class="text-center h3-md" style="margin-bottom:0.5rem;">How things run until your project kicks off</h3>
		<p class="text-center" style="margin-bottom:3rem;">And I bet we can get these first two taken care of today</p>

		<?php get_template_part( 'templates/preproject', 'timeline' ); ?>
		<div id="lets-go" class="hire-form">
			<h4 class="text-center hire-cta no-hover h4-md">Does working together sound like something you’d like to do?<br />
				Then let’s get this ball rolling!
			</h4>
			<?php echo do_shortcode( '[gravityform id="4" title="false" description="false"]' ); ?>
		</div>
	</div>
<?php endwhile; ?>
