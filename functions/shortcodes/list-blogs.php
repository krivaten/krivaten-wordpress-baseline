<?php
function sc_list_blogs($atts){
	extract(shortcode_atts(array(
        "count" => 5
    ), $atts));

	$blogQuery = new WP_Query(
	  array('posts_per_page' => $count, 'orderby' => 'post_date')
	);

	$output = '<div class="list-blogs">';
	while($blogQuery->have_posts()) {
		$blogQuery->the_post();
		$output .= "<div class=\"list-blogs-post\">";
			$output .= "<h5><a href=\"".get_permalink()."\" title=\"".get_the_title()."\"><span>".get_the_title()."</span></a></h5>";
			$output .= "<p><small><em>".get_the_date()."</em></small></p>";
		$output .= "</div>";
	}
	$output .= "</div>";
	wp_reset_query();

	return $output;
}

// [list_blogs count="3" category="4" orderby="post_date" showtags="true"]
?>
