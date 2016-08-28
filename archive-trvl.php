<?php

	/**
	 * The WordPress Query class.
	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
	 *
	 */
	$args = array(
		
		//Type & Status Parameters
		'post_type'   => 'trvl',
		//'post_status' => 'any',
		
		//Order & Orderby Parameters
		'order'               => 'ASC',
		'orderby'             => 'date',
		
		//Pagination Parameters
		'posts_per_page'         => -1,
		'posts_per_archive_page' => -1
	);

$trvl_query = new WP_Query( $args );

if ( $trvl_query->have_posts() ) : ?>


	<div class="flex justify-center items-end col-12" style="height: 100vh;">
		<div class="btn-group flex">
			<button id="prev" class="btn btn-white"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
			<button id="pause" class="btn btn-white"><i class="fa fa-pause" aria-hidden="true"></i></button>
			<button id="next" class="btn btn-white"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
		</div>
	</div>

	<script>
		var img	= [

			<?php while ($trvl_query->have_posts()) : $trvl_query->the_post(); ?>

				"<?php the_field('pic') ?>",

			<?php endwhile; wp_reset_postdata(); ?>

		];

		$(img).each(function(){
			$("<img/>")[0].src = this;
		});

		$.backstretch(img, { duration: 10000 });

		$("#prev").click(function(e){
			e.preventDefault();

			$.backstretch("prev");
		});

		$("#pause").click(function(e){
			e.preventDefault();

			$.backstretch("pause");
		})

		$("#next").click(function(e){
			e.preventDefault();

			$.backstretch("next");		
		})
	</script>

<?php endif; ?>