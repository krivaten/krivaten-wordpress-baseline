<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title(''); ?></title>

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/css.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" />

	<!-- Conditional Scripts -->
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/html5shiv.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/logos/android-chrome-192x192.png" sizes="192x192">
	<meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory'); ?>/assets/img/logos/smalltile.png" />
	<meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory'); ?>/assets/img/logos/mediumtile.png" />
	<meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory'); ?>/assets/img/logos/widetile.png" />
	<meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory'); ?>/assets/img/logos/largetile.png" />

	<!-- Pingback URL -->
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
