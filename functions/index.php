<?php

/**
 * Add RSS links to the header
 */
automatic_feed_links();


/**
 * Clean up the header
 */
function removeHeadLinks() {

	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');

}

add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');


/**
 * Add page name class to body
 */
function page_bodyclass() {
	global $wp_query;

	$page = '';

	if(is_front_page() ) {
		$page = 'home';
	} elseif (is_page()) {
		$page = $wp_query->query_vars["pagename"];
	}

	if($page) echo 'class= "'. $page. '"';
}

/**
 * Disable default gallery styling
 */
add_filter('use_default_gallery_style', '__return_false');

/**
 * Enable post thumbnails
 */
add_theme_support('post-thumbnails');


/**
 * Widget positions
 */
$kvt_Widgets = array(
	'Sidebar'
);

foreach($kvt_Widgets as $widget) {

	if(function_exists('register_sidebar')) {

		$widgetstring = str_replace(" ", "-", strtolower($widget));
		register_sidebar(array(
			'name' => $widget,
			'id' => $widgetstring,
			'before_widget' => "<div class=\"$widgetstring\">",
			'after_widget' => "</div>",
			'before_title' => "<h3>",
			'after_title' => "</h3>",
		));

	}

}


/**
 * Check if widget is present
 */
function kvt_sidebar($widget,$container = false) {

	if (is_active_sidebar($widget)) {

		if($container != false) echo "<div id=\"$widget\"><div class=\"wrapper\">";
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar($widget)) : endif;
		if($container != false) echo "</div></div><div class=\"clearfix\"></div>";

	}

}


/**
 * Add 'http://' to a URL
 */
function kvt_add_http($url) {

	if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
		$url = "http://" . $url;
	}
	return $url;

}


/**
 * Custom 'Read More' link
 */
function new_excerpt_more() {

	global $post;
	return '... (<a href="'. get_permalink($post->ID) . '">Read more</a>)';

}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Menu positions
 */
if (function_exists('register_nav_menus')) {

	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
			'footer-menu' => 'Footer Menu'
		)
	);

}


/**
 * Enable shortcodes in widgets
 */
add_filter('widget_text', 'do_shortcode');


/**
 * Scripts
 */
require_once("scripts.php");


/**
 * Shortcodes
 */
require_once("shortcodes.php");


/**
 * Add Bible Book Taxonomy
 */
register_taxonomy('bible', 'post', array('hierarchical' => false, 'label' => 'Books of Bible', 'query_var' => true, 'rewrite' => array( 'slug' => 'bible_books', 'with_front' => false )));

?>
