<?php if (is_front_page() && (WP_ENV === 'production')) {
	wp_safe_redirect( home_url( '/ck' ), 301 );
	exit;
} ?>