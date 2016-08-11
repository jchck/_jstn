<div class="col-12">
	<h1 class="center">archive-trvl.php</h1>
</div>

<?php while (have_posts()) : the_post(); ?>

	<h2><?php the_title( ); ?></h2>

<?php endwhile; ?>