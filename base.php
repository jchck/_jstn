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
	<div class="px3 lg-px4">
		<?php get_template_part( 'templates/header' ); ?>
		<?php include Wrapper\template_path(); ?>
	</div>
	<?php wp_footer(); ?>
</body>
</html>