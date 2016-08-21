<div class="flex justify-center items-end col-12" style="height: 100vh;">
	<div class="btn-group flex">
		<button id="prev" class="btn btn-white"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
		<button id="pause" class="btn btn-white"><i class="fa fa-pause" aria-hidden="true"></i></button>
		<button id="next" class="btn btn-white"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
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