<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title(''); ?></title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/css.css" />
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/html5shiv.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/logo-16.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/logo-114.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/logo-114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/logo-144.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/logo-144.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>
<body <?php page_bodyclass(); ?>>


	<?php require_once(TEMPLATEPATH . '/templates/components/navbar.php'); ?>

	<?php require_once(TEMPLATEPATH . '/templates/components/jumbotron.php'); ?>

	<!--[if lt IE 9]>
	<div class="container">
		<div class="alert alert-warning text-center">
			<h2 class="text-center">Outdated Browser Warning</h4>
			<p class="text-center">While this site will look and work fine for the most part, you are likely missing out on an optimal user experience.</p>
			<p class="text-center">Do yourself a favor and please upgrade to <a href="https://www.google.com/chrome" title="Google Chrome" target="_blank" style="color: black; font-weight: bold;">Google Chrome</a> or <a href="http://www.mozilla.org/" title="Mozilla Firefox" target="_blank" style="color: black; font-weight: bold;">Mozilla Firefox</a></p>
		</div>
	</div>
	<![endif]-->

	<main role="main">
