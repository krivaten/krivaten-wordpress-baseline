<header class="navbar" role="banner">

	<a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>" class="navbar-logo">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" />
	</a>

	<button type="button" class="navbar-drawer-trigger btn-link" data-toggle="toggle-drawer">
		Menu <i class="icon icon-align-justify icon-lg"></i>
	</button>

	<div class="navbar-drawer">
		<div class="navbar-drawer-content">
			<?php
				if(has_nav_menu('main-menu')) {
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'container' => 'nav',
						'container_class' => 'navbar-drawer-menu',
						'depth' => '1'
					));
				}
			?>
		</div>
	</div>
</header>
