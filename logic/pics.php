<?php

namespace Jchck\Pics;

/* Classes to append to <img>'s below */
$img_css = 'border sm-p1 p0';

function img_css(){
    global $img_css;

    return $img_css;
}

function gallery($output, $attr){
	/**
	 *
	 * This refractors the [gallery] shortcode
	 * @link http://stackoverflow.com/a/19804410
	 *
	 */
	
	global $post, $img_css;

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

    $output = "<div class='flex flex-wrap justify-end'>";

    /* Loop through attachments */

    foreach ($attachments as $id => $attachment) {
    	$img = wp_get_attachment_image_src($id, 'full');

    	$output .= "<div class='col-12 sm-col-6 pr1 pb1'>";
    	$output .= "<img src='{$img[0]}' class='{$img_css}' />";
    	$output .= "</div>";

    }

    $output .= "</div>\n";

    return $output;
}

add_filter( 'post_gallery', __NAMESPACE__ . '\\gallery', 10, 2);



function new_imgs($html, $id, $caption, $title, $align, $url){
    /**
     *
     * This allows us to control the output of new <img /> tags inserted via WYSIWYG
     * @link https://developer.wordpress.org/reference/hooks/image_send_to_editor/
     *
     */

    global $img_css;
    
    $img = "<img src='{$url}' class='{$img_css}' />";
    return $img;
}

add_action('image_send_to_editor', __NAMESPACE__ . '\\new_imgs', 10, 9);



function previous_imgs($content) {
    /**
     *
     * Here we add our $img_css classes to preexisting <img />'s inserted via WYSIWYG
     * @link http://stackoverflow.com/a/22078964/2258144
     * @uses http://php.net/manual/en/function.preg-replace.php
     * @uses https://codex.wordpress.org/Plugin_API/Filter_Reference/the_content
     *
     */
    
   global $post, $img_css;

   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 ' . $img_css .'"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}
add_filter('the_content', __NAMESPACE__ . '\\previous_imgs');



function remove_links(){
    /**
     *
     * Remove img lings
     *
     */

    $image_set = get_option( 'image_default_link_type' );

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_filter('admin_init', __NAMESPACE__ . '\\remove_links', 10);



function main(){
    /**
     *
     * This displays a posts main image to the front
     * Currently this function is not in use
     * @uses https://www.advancedcustomfields.com/resources/get_field
     * @uses https://developer.wordpress.org/reference/functions/wp_get_attachment_image_url
     *
     */
    
    if(class_exists('acf')){

        global $img_css;

        $img = get_field('main_image');

        if ($img) {
            $url = wp_get_attachment_image_url( $img, 'medium' );

            echo '<img src="' . $url . '" class="' . $img_css . '" />';
        }
    }
}
