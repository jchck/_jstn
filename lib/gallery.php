<?php

namespace Roots\Sage\Gallery;

function gallery( $output, $attr ){
	global $post;

	if (isset( $attr['orderby'])) {
		$attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
		if (!$attr['orderby'])
			unset($attr['orderby']);
	}

	extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    $output = "<div class=\"row center-xs\">\n";

    // Loop through the attachments
    foreach ($attachments as $id => $attachment) {
    	$img = wp_get_attachment_image_src($id, 'full');

    	$output .= "<div class=\"col-sm-4 col-xs-8\">\n";
    	$output .= "<img src=\"{$img[0]}\" class=\"p1 m1 border\" data-action=\"zoom\" />\n";
        $output .= "</div>\n";
    }

    $output .= "</div>\n";

    return $output;
}

add_filter( 'post_gallery', __NAMESPACE__ . '\\gallery', 10, 2);