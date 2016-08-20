<script>
	var img	= [
		"http://dl.dropbox.com/u/515046/www/outside.jpg",
		"http://dl.dropbox.com/u/515046/www/garfield-interior.jpg",
		"http://dl.dropbox.com/u/515046/www/cheers.jpg",
		"http://dl.dropbox.com/u/515046/www/coffee-light.jpg"
	];

	$(img).each(function(){
		$("<img/>")[0].src = this;
	});

	$.backstretch(img);
</script>

<?php while (have_posts()) : the_post(); ?>

	

<?php endwhile; ?>

