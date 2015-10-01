<?php
/**
 * Template Name: Hire Step 2 Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container-fluid wrap step2">
		<h1 class="mt0 text-center h1-md">Boom! First Step Done</h1>
		<p>That wasn't so hard, right? We're on the path to Internet awesomeness, one step at a time. Now, on to step two&hellip;</p>
		<?php get_template_part( 'templates/preproject', 'timeline' ); ?>
		<p>Browse the calendar below to find a day and time that works for you. Be sure to <span class="strong">confirm</span> and then <span class="strong">schedule</span> our conversation with your <span class="strong">name</span>, <span class="strong">email</span>, and <span class="strong">location</span> this'll then automagically add it to my calendar and send you a calendar invite as well. Technology is so cool.</p>
		<h4 class="hire-cta no-hover h5">We'll be talking about project expecations: <span class="strong">design</span>, <span class="strong">functionality</span>, <span class="strong">timeline</span>, and <span class="strong">budget</span>. Please keep this in mind when scheduling.</h4>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://calendly.com/justinchick/new-project/"></iframe>
		</div>
	</div>
<?php endwhile; ?>