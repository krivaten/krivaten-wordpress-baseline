<?php
	if(is_page() && !is_page_template()) {
		$pageTemplate = 'page';
	} elseif(is_single()) {
		$pageTemplate = 'single';
	} elseif(is_page_template('page-home')) {
		$pageTemplate = 'page-home';
	} elseif(is_page_template('page-left')) {
		$pageTemplate = 'page-left';
	} elseif(is_page_template('page-right')) {
		$pageTemplate = 'page-right';
	} elseif(is_page_template('page-style')) {
		$pageTemplate = 'page-style';
	} elseif(is_archive() || is_search()) {
		$pageTemplate = 'archive';
	} elseif(is_404()) {
		$pageTemplate = '404';
	} else {
		$pageTemplate = 'index';
	}
	require_once(TEMPLATEPATH . '/templates/'.$pageTemplate.'.php');
?>
