<?php

namespace Jchck\Pics;

function gallery($output, $attr){
	/**
	 *
	 * This refractors the [gallery] shortcode
	 * @link http://stackoverflow.com/a/19804410
	 *
	 */
	
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

    $output = "<div class=\"flex flex-wrap justify-end\">\n";

    /* Loop through attachments */

    foreach ($attachments as $id => $attachment) {
    	$img = wp_get_attachment_image_src($id, 'full');

    	$output .= "<div class=\"col-6 pr1 pb1\">\n";
    	$output .= "<img src=\"{$img[0]}\" class=\"border p1\" />\n";
    	$output .= "</div>\n";

    }

    $output .= "</div>\n";

    return $output;
}

add_filter( 'post_gallery', __NAMESPACE__ . '\\gallery', 10, 2);