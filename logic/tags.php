<?php

namespace Jchck\Tags;

function tags(){
	$tags = get_tags();

	foreach ($tags as $tag) {
		$tag_link = get_tag_link( $tag->term_id );

		$html = '<div class="col-6 md-col-4 lg-col-3 p2">';
			$html .= '<a href="{$tag_link}">';
				$html .= '{$tag->name}';
			$html .= '</a>';
		$html .= '</div>';
	}
	echo $html;
}