<?php
function sc_item($atts){
	extract(shortcode_atts(
		array(
			'title' => null,
			'half' => null,
			'whole' => null,
			'price' => null,
			'image' => null,
			'first' => null,
			'last' => null
		),
		$atts)
	);

	$return = '';
	if ($first) $return .= '<div class="items">';
	$return .= '<div class="col-1-2">';
		$return .= '<div class="item">';
			if ($image) $return .= '<img src="'.$image.'" class="item__image">';
			$return .= '<div class="item__content">';
				$return .= '<h3>'.$title.'</h3>';
				$return .= '<p>';
					if ($half)	$return .= 'half $'.$half;
					if ($half && $whole) $return .= ' | ';
					if ($whole) $return .= 'whole $'.$whole;
					if ($price) $return .= '$'.$price;
				$return .= '</p>';
			$return .= '</div>';
		$return .= '</div>';
	$return .= '</div>';
	if ($last) $return .= '</div>';

	return preg_replace("/\s+/", " ", $return);
}

// [quote source="name"]Content[/quote]
?>
