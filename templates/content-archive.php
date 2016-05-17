<?php

use Jchck\Excerpt;
use Jchck\Titles;
use Jchck\Work;

?>
<article class="col-12">
	<h2 class="<?= Titles\classes(); ?> border-top border-width-skinny"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="sm-flex items-center logo-work">
		<a class="block center" href="<?php the_permalink(); ?>">
			<?= Work\svg(); ?>
		</a>
		<div class="flex-auto sm-ml3">
			<?= Excerpt\excerpt(); ?>
		</div>
	</div>
</article>