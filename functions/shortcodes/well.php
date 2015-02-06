<?php
function sc_well($atts, $content = null){
	return '<div class="article-well">'.do_shortcode(trim($content)).'</div>';
}

// [well]Content[/well]
?>