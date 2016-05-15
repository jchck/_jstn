<?php

use Jchck\Titles;
use Jchck\Work;

?>
<article class="col-12">
	<h2 class="<?= Titles\classes(); ?> border-top border-width-skinny"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<div class="flex items-center work-excerpt">
		<?= Work\svg(); ?>
		<div class="flex-auto ml3">
			<p class="h3 measure">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
		</div>
	</div>
</article>