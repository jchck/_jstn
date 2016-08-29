<?php 

use Jchck\Excerpt;

	/**
	 * (just) one thing
	 * 
	 * The WordPress Query class.
	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
	 * 
	 * [1] Gravity Forms Function Call
	 * @link https://www.gravityhelp.com/documentation/article/embedding-a-form/#function-call
	 *
	 */
	$args = array(
		
		
		//Category Parameters
		'category_name'    => '1-thing',
		
		
		//Type & Status Parameters
		'post_type'   => 'post',
		//'post_status' => 'any',
		
		//Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',				
		
		//Pagination Parameters
		'posts_per_page'         => 5,
		'posts_per_archive_page' => 5
		
	);

$one_query = new WP_Query( $args ); ?>

<div class="flex  flex-wrap justify-center">
	<div class="col-12 sm-col-10 md-col-8 lg-col-6">
		<h1 class="h1-fp mt0 mb1 center">(just) 1 thing</h1>
		<p class="h3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
			<form action="//justinchick.us11.list-manage.com/subscribe/post?u=7e25f7d87fbbfde66043d4b76&amp;id=3fda13180b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="one-thing pb4 validate" target="_blank" novalidate>
				<div class="flex flex-wrap" id="mc_embed_signup_scroll">

					<div class="col-12 sm-col-6 relative mb3 pr0 sm-pr1 mc-field-group">

						<input type="text" value="" name="FNAME" class="block h3 p1 border-bottom border-width-skinny bg-white" id="mce-FNAME" required>
						<span class="highlight absolute col-12 left-0"></span>
						<span class="bar relative block"></span>
						<label class="h4 absolute" for="mce-FNAME">Name</label>
						
					</div>

					<div class="col-12 sm-col-6 relative mb3 mc-field-group">

						<input type="email" value="" name="EMAIL" class="block h3 p1 border-bottom border-width-skinny bg-white required email" id="mce-EMAIL" required>
						<span class="highlight absolute col-12 left-0"></span>
						<span class="bar relative block"></span>
						<label class="h4 absolute" for="mce-EMAIL">Email</label>

					</div>

					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7e25f7d87fbbfde66043d4b76_3fda13180b" tabindex="-1" value="">
					</div>

					<div class="col-12 center">
						<input type="submit" value="Yes Please!" name="subscribe" id="mc-embedded-subscribe" class="btn btn-mnml">
					</div>

				</div>
			</form>
		</div>

		<!--End mc_embed_signup-->

		<?php if ( $one_query->have_posts()) : ?>

			<h2 class="h2-fp center">Recient Things</h2>

			<?php while ( $one_query->have_posts()) : $one_query->the_post(); ?>

				<article class="col-12">

					<h2 class="mt0 pt2 bold border-top border-width-skinny"><a href="<?= the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<?= Excerpt\excerpt(); ?>

				</article>

			<?php endwhile; wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>

</div>
