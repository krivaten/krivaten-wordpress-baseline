<?php
/**
 * Default scripts to enqueue
 */
function kvt_scripts() {

	// If this is not an admin page
	if (!is_admin()) {

		// Use the Google copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, true);
		wp_enqueue_script('jquery');

		// Don't load comment-reply
		wp_deregister_script( 'comment-reply' );

		// Load theme js file
		wp_enqueue_script('krivaten', get_bloginfo('template_url') . '/assets/js/js.js', false, null, true);

	}

}
add_action('init', 'kvt_scripts');
?>
