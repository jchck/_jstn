<?php

namespace Roots\Sage\Wrap;

function wrap(){
	if (!is_page(  )) {
		$wrap = 'wrap-sm';
	} else {
		$wrap = 'wrap';
	}

	echo $wrap;
}