<?php

namespace Roots\Sage\Notebook;

function banner(){
	if (is_single() && !is_singular('work')) {
		echo "style='background:red'";
	}
}