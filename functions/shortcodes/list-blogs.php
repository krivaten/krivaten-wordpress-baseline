<?php
function sc_list_blogs($atts){
	extract(shortcode_atts(array(
        'count' => 5,
				'category' => 0,
				'order' => 'DESC',
				'orderby' => 'post_date',
				'show_excerpt' => false,
				'show_date' => true
    ), $atts));

	$blogQuery = new WP_Query(
	  array('posts_per_page' => $count, 'cat' => $category, 'order' => $order, 'orderby' => $orderby)
	);

	$output = '<div class="list-blogs">';
	while($blogQuery->have_posts()) {
		$blogQuery->the_post();
		$output .= "<div class=\"list-blogs-post\">";
			$output .= "<h5><a href=\"".get_permalink()."\" title=\"".get_the_title()."\"><span>".get_the_title()."</span></a></h5>";
			if ($show_excerpt) $output .= "<p>".get_the_excerpt()."</p>";
			if ($show_date) $output .= "<p><small><em>".get_the_date()."</em></small></p>";
		$output .= "</div>";
	}
	$output .= "</div>";
	wp_reset_query();

	return $output;
}

// [list_blogs (count="0" category="4" orderby="post_date" order="DESC" show_excerpt=false show_date=true)]
?>
