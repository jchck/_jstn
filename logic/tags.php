<?php

namespace Jchck\Tags;

function all_tags(){
	$tags = get_tags();

	$html = "<div class='flex flex-wrap'>";

		foreach ($tags as $tag) {
			$tag_link = get_tag_link( $tag->term_id );
				
			$html .= "<div class='col-6 md-col-4 lg-col-3 p2'>";
				$html .= "<a href='{$tag_link}'>";
					$html .= "{$tag->name}";
				$html .= "</a>";
			$html .= "</div>";
		}

	$html .= "</div>";
	
	echo $html;

}