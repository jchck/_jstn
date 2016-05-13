<?php

$jchck_includes = [
	'lib/assets.php',
	'lib/setup.php',
	'lib/titles.php',
	'lib/menu.php',
	'lib/excerpt.php',
	'lib/category.php',
	'lib/typography.php',
	'lib/wrapper.php'
];

foreach ($jchck_includes as $file) {
	if (!$filepath = locate_template( $file )) {
		trigger_error(sprintf(__('Error locating %s for inclusion', 'jchck'), $file), E_USER_ERROR);
	}

	require_once $filepath;
}

unset($file, $filepath);
