<?php
/**
 * Template Name: Hire Template
 */
use Roots\Sage\Date;
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap">
		<h1 data-fitter-happier-text>It all starts with a conversation</h1>
		<p>I partner with individuals and organizations when I’m confident that a relationship can be beneficial for both of us.</p>
		<p class="mt3 mb0">I am available for <span class="strong">WordPress</span> and <span class="strong">front-end development</span> as well as <span class="strong">user experience design consulting</span>. I am currently scheduling projects to begin <span class="strong">mid-<?= Date\month(); ?></span>.</p>
		<div class="mt4 mb4">
			<h3 class="hidden-xs" data-fitter-happier-text>There are three ways we can work together</h3>
		</div>
		<div class="row">
			<div class="flex col-sm col-xs-12 mr2-sm ml2-sm mb3 mb0-sm">
				<a href="#lets-go" class="p3 work-box hire-cta flex flex-center border">
					<div class="ie10-width100">
						<p class="strong"><u>The Kitchen Sink</u></p>
						<p>Everything and then some -- strategy, design, development, UX, custom WordPress theming</p>
						<p class="m0 strong">$5,000+</p>
					</div>
				</a>
			</div>
			<div class="flex col-sm col-xs-12 mr2-sm ml2-sm mb3 mb0-sm">
				<a href="#lets-go" class="p3 work-box hire-cta flex flex-center border">
					<div class="ie10-width100">
						<p class="strong"><u>Concentrate</u></p>
						<p>Right to the point -- top notch development with a rapid turnaround</p>
						<p class="m0 strong">$2,000</p>
					</div>
				</a>
			</div>
			<div class="flex col-sm col-xs-12 mr2-sm ml2-sm">
				<a href="#lets-go" class="p3 work-box hire-cta flex flex-center border">
					<div class="ie10-width100">
						<p class="strong"><u>Just a Taste</u></p>
						<p>You pick my brain and I pick yours on the topic of your choice (provided it's in my wheelhouse)</p>
						<p class="m0 strong">$100 per hour, 1-hour minimum</p>
					</div>
				</a>
			</div>
		</div>
		<div class="mt4 mb4 hidden-xs">
			<h3 data-fitter-happier-text>How things run until your project kicks off</h3>
			<p class="text-center m0">And I bet we can get these first few taken care of today</p>
		</div>

		<?php get_template_part( 'templates/preproject', 'timeline' ); ?>
		<div id="lets-go" class="hire-form mt2 mt0-sm">
			<h4 class="text-center hire-cta no-hover h4-md hidden-xs">Does working together sound like something you’d like to do?<br />
				Then let’s get this ball rolling!
			</h4>
			<?php echo do_shortcode( '[gravityform id="4" title="false" description="false"]' ); ?>
		</div>
	</div>
<?php endwhile; ?>
