<?php

use Jchck\Titles;
use Jchck\Work;

?>

<?php if (is_singular( 'work' )) { ?>
	<div class="flex justify-between items-center border-top pt2 pb2">
		<h1 class="<?= Titles\classes(); ?>">
			<?= Titles\title(); ?>
		</h1>
		<a class="caps" target="_blank" href="<?= Work\link(); ?>">Project Link</a>
	</div>
<?} else { ?>
	<h1 class="<?= Titles\classes(); ?>">
		<?= Titles\title(); ?>
	</h1>
<?}