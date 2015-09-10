<?php
/**
 * Template Name: Hire Template
 */

?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap">
		<?php get_template_part('templates/page', 'header'); ?>
		<p>I partner with individuals and organizations when I’m confident that a relationship can be beneficial for both of us.</p>
		<p>I am available for WordPress and front-end development as well as user experience design consulting. I am currently scheduling projects to begin mid October.</p>
		<h3 class="text-center">There are two ways we can work together</h3>
		<div class="row">
			<div class="col-md mr2 ml2 p3 border">
				<div class="work-box flex flex-center">
					<div>
						<p class="strong"><u>The Kitchen Sink</u></p>
						<p>Get it all and then some -- stragety, design, development, UX, custom WordPress theming</p>
						<p class="m0 strong">$3,000+</p>
					</div>
				</div>
			</div>
			<div class="col-md mr2 ml2 p3 border">
				<div class="work-box flex flex-center">
					<div>
						<p class="strong"><u>Just a Taste</u></p>
						<p>You pick my brain and I'll pick your brain on the topic of your choice (provided it's in my wheelhouse)</p>
						<p class="m0 strong">$100 per hour, 1 hour minimum</p>
					</div>
				</div>
			</div>
		</div>
		<h3 class="text-center">Here’s how things typically go up until your project begins</h3>
		<ol>
			<li>You'll fill out the questionnaire below introducing yourself and your project to me</li>
			<li>I'll review and follow up with my availability to grab coffee either in person (if we're in the same city) or via Skype.</li>
			<li>We get to know each other.  I'll ask you questions to find out what makes you tick, what drives your business, and to explore the project at hand. I expect you to have a few questions of your own.</li>
			<li>Based on our conversation, I'll follow up with a proposed project scope, timeline, and cost.</li>
			<li>If necessary, we'll review and I'll answer any questions regarding the proposal.</li>
			<li>We both accept the proposal.</li>
			<li>We both sign a working agreement (sample agreement).</li>
			<li>You make a payment of 1/3 the agreed project total cost.</li>
			<li>We schedule project kickoff. I schedule strictly on a first come, first serve basis.</li>
			<li>Your project begins on the date of project kickoff.</li>
		</ol>
		<h4 class="text-center">If working together sounds like something you’d like to do, let’s get this ball rolling!</h4>
		<?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
	</div>
<?php endwhile; ?>
