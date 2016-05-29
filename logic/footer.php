<?

namespace Jchck\Footer;

function footer_check(){
	static $display;

	isset($display) || $display = !in_array(true, [
		is_404(),
		is_page_template( 'template-landing-seo.php' )
	]);

	return apply_filters( 'jchck/footer_check', $display );
}