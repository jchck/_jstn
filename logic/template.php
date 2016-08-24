<?

namespace Jchck\Template;
/**
 *
 * These functions check the currently displaying template
 * and include (or in the case of those templates in the array)
 * don't include
 * 
 * First is for the header (navigation)
 * 
 * Secont is for the footer 
 *
 */


function header(){
	static $display;

	isset($display) || $display = !in_array(true, [
		is_404(),
		is_post_type_archive( 'trvl' )
	]);

	return apply_filters( 'jchck/header', $display );
}


function footer(){
	static $display;

	isset($display) || $display = !in_array(true, [
		is_404(),
		is_page_template( 'template-landing-seo.php' ),
		is_post_type_archive( 'trvl' )
	]);

	return apply_filters( 'jchck/footer', $display );
}