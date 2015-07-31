<?php
/**
 * Require shortcode files
 */
// require("shortcodes/accordion.php");
require("shortcodes/blog.php");
require("shortcodes/lead.php");
require("shortcodes/quote.php");
require("shortcodes/item.php");
require("shortcodes/vimeo.php");
require("shortcodes/well.php");
require("shortcodes/youtube.php");

/**
 * Preprocess shortcocdes
 */
function pre_process_shortcode($content) {
	global $shortcode_tags;

	// Backup current registered shortcodes and clear them all out
	$orig_shortcode_tags = $shortcode_tags;
	$shortcode_tags = array();

	// Add shortcodes
	// add_shortcode('accordion', 'sc_accordion');
	add_shortcode('blog', 'sc_blog');
	add_shortcode('lead', 'sc_lead');
	add_shortcode('quote', 'sc_quote');
	add_shortcode("item", "sc_item");
	add_shortcode("vimeo", "sc_vimeo");
	add_shortcode('well', 'sc_well');
	add_shortcode("youtube", "sc_youtube");

	// Do the shortcode (only the one above is registered)
	$content = do_shortcode($content);

	// Put the original shortcodes back
	$shortcode_tags = $orig_shortcode_tags;

	return $content;
}

add_filter('the_content', 'pre_process_shortcode', 7);
?>
