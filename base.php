<?php

use Jchck\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php include Wrapper\template_path(); ?>
	<?php wp_footer(); ?>
</body>
</html>