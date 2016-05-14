<?php

use Jchck\Titles;
use Jchck\Excerpt;

?>
<article class="col-12">
	<h2 class="<?= Titles\classes(); ?> border-top"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<?= Excerpt\excerpt(); ?>
</article>