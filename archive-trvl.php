<script>
	var img	= [

		<?php while (have_posts()) : the_post(); ?>

			"<?php the_field('pic') ?>",

		<?php endwhile; ?>

	];

	$(img).each(function(){
		$("<img/>")[0].src = this;
	});

	$.backstretch(img);
</script>