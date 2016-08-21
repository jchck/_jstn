<div class="flex justify-center items-end col-12" style="height: 100vh;">
	<div class="btn-group flex">
		<button id="prev" class="btn btn-white">Prev</button>
		<button id="pause" class="btn btn-white">Pause</button>
		<button id="next" class="btn btn-white">Next</button>
	</div>
</div>

<script>
	var img	= [

		<?php while (have_posts()) : the_post(); ?>

			"<?php the_field('pic') ?>",

		<?php endwhile; ?>

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