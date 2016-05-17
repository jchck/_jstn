<?php

use Jchck\Titles;
use Jchck\Work;

?>

<?php if (is_singular( 'work' )) { ?>
	<div class="md-flex justify-between items-center border-top pt2 pb2">
		<h1 class="<?= Titles\classes(); ?>">
			<?= Titles\title(); ?>
		</h1>
		<a style="max-width: 270px" class="flex items-center logo-work right" href="<?= Work\link(); ?>" target="_blank">
			<div class="flex-auto">
				<p class="caps m0 mr2">Project Link</p>
			</div>
			<?= Work\svg(); ?>
		</a>
	</div>
<?} elseif (is_front_page() || is_page( 'ck' )) { ?>
	<h1 class="mt4 mb1 h1-fp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h1>
	<p class="h2 mb1">Cras laoreet orci sed arcu, finibus arcu dapibus.</p>
	<p class="h2 mt0 mb4">Integer eu mattis sapien. Nulla ut pulvinar purus.</p>
<?} else { ?>
	<h1 class="<?= Titles\classes(); ?>">
		<?= Titles\title(); ?>
	</h1>
<?}