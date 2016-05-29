<?

namespace Jchck\Footer;

function footer_check(){
	static $display;

	isset($display) || $display = !in_array(true, [
		is_404(),
	]);

	return apply_filters( 'jchck/footer_check', $display );
}