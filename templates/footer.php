	</main>

	<footer class="container">
		<div class="footer-row">
			<div class="footer-col">
			<?php
				if(has_nav_menu('main-menu')) {
					wp_nav_menu(array(
						'theme_location' => 'footer-menu',
						'container' => 'nav',
						'container_class' => 'footer-menu',
						'depth' => '1'
					));
				}
			?>
			</div>

			<div class="footer-col">
				<?php
					$emailAdd = get_option("kvt_email_add");
					if($emailAdd != "") {
						echo '<a href="mailto:'.$emailAdd.'" title="Email Us">'.$emailAdd.'</a>';
					}
				?>
			</div>
		</div>

		<div class="footer-row">
			<div class="footer-col">&copy;<?php echo date("Y") ?>  <?php bloginfo('name'); ?></div>

			<div class="footer-col"> <?php bloginfo('description'); ?> </div>
		</div>
	</footer>

	<?php wp_footer(); ?>
	<?php $googleAnalytics = get_option("roots_google_analytics"); ?>
	<?php if($googleAnalytics != "") { ?>
		<script>
			var _gaq = [['_setAccount','<?php echo $googleAnalytics?>'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
				g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	<?php } ?>
</body>
</html>
