<?php use Roots\Sage\Category; ?>
<article <?php post_class('col-md-3 col-sm-6 col-xs-12 p0 flex first-img'); ?>>
	<a href="<?php the_permalink(); ?>" class="post-card img-size p3 flex flex-center ie10-width100">
		<div class="text-center center-block ie-max-width100">
			<header class="ie10-width100">
				<h2 class="h4 mb3 mt0"><?php the_title(); ?></h2>
				<ul class="m0 list-inline h4"><?= Category\slug(); ?></ul>
			</header>
		</div>
		<div class="post-img ie10-width100" style="background: url('<?php the_field('main_image'); ?>'); background-size: cover;"></div>
	</a>
</article>
