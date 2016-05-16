<?php

use Jchck\Titles;
use Jchck\Work;

?>

<?php if (is_singular( 'work' )) { ?>
	<div class="flex justify-between items-center border-top pt2 pb2">
		<h1 class="<?= Titles\classes(); ?>">
			<?= Titles\title(); ?>
		</h1>
		<a class="flex items-center logo-work" href="<?= Work\link(); ?>" target="_blank">
			<?= Work\svg(); ?>
			<div class="flex-auto">
				<p class="caps m0">Project Link</p>
			</div>
		</a>
	</div>
<?} else { ?>
	<h1 class="<?= Titles\classes(); ?>">
		<?= Titles\title(); ?>
	</h1>
<?}