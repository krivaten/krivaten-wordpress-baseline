<?php
function sc_divider($atts){

	$result = '';
	$result .= '<div class="divider">';
		$result .= '<svg class="icon home" version="1.1" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">';
			$result .= '<path d="M42.3,47.8H29V34.5h-8v13.3H7.6V31.2L25,13.9l17.3,17.3V47.8z"/>';
			$result .= '<path d="M47.4,31.1L25,8.7L2.6,31.1L1,25.2L21.2,5l0,0L25,1.2l0,0l0,0l3.7,3.7l0,0L49,25.2L47.4,31.1z"/>';
		$result .= '</svg>';
	$result .= '</div>';
	return $result;
}

// [divider]
?>
