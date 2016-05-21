<?php

$jchck_includes = [
	'logic/assets.php',
	'logic/setup.php',
	'logic/titles.php',
	'logic/menu.php',
	'logic/excerpt.php',
	'logic/category.php',
	'logic/jetpack.php',
	'logic/typography.php',
	'logic/pics.php',
	'logic/video.php',
	'logic/wrapper.php',
	'logic/work.php'
];

foreach ($jchck_includes as $file) {
	if (!$filepath = locate_template( $file )) {
		trigger_error(sprintf(__('Error locating %s for inclusion', 'jchck'), $file), E_USER_ERROR);
	}

	require_once $filepath;
}

unset($file, $filepath);
