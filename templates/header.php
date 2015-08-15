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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
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

	<!--[if lt IE 9]>
	<div class="container">
		<div class="outdated text-center">
			<h2 class="text-center">Outdated Browser Warning</h4>
			<p class="text-center">Using an outdated browser makes your computer unsafe and your viewing experience undesirable. Please consider updating your browser to something more up to take and secure.</p>
			<p class="text-center">Check out some of the great available options over at  <a href="http://browsehappy.com/" title="Browse Happy" target="_blank" style="font-weight: bold;">Browse Happy</a>.</p>
		</div>
	</div>
	<![endif]-->

	<?php if (!is_page() || is_page('home')) require_once(TEMPLATEPATH . '/templates/components/jumbotron.php'); ?>

	<main role="main">
