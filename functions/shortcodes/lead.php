<?php
function sc_lead($atts, $content = null){
	return '<p class="article-lead">'.do_shortcode(trim($content)).'</p>';
}

// [lead]Content[/lead]
?>
