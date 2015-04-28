<?php
/*
Template Name: Home Page
*/
?>

<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<section>
	<div class="container container-lg">
		<div class="entry-content">
			<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
		</div>
	</div>
</section>

<section class="feature" id="email">
	<div class="container container-lg">
		<h2>sign up to receive my blog posts</h2>

		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
			<form action="//soulwhispererministry.us4.list-manage.com/subscribe/post?u=7f89967e4af8c80ac0e4d5b18&amp;id=c97e96d249" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email address...">
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;"><input type="text" name="b_7f89967e4af8c80ac0e4d5b18_c97e96d249" tabindex="-1" value=""></div>
					<input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
				</div>
			</form>
		</div>
		<!--End mc_embed_signup-->
	</div>
</section>

<section class="products">
	<div class="container container-lg">
		<h2 style="text-align: center;">featured published work</h2>
		<p style="text-align: center;">
			I have written several works on and around the topic of living the gospel and speaking it into people lives. They range from my more comprehensive work, Soul Whisperer, to specific engagement vehicles and studies for one-to-one, groups and classes. Check them out below!
		</p>

		<div class="product-callouts">
			<div class="product-callout">
				<a href="<?php echo site_url('products#laumch-point'); ?>">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/04/launch-point.png" />
				</a>
			</div>
			<div class="product-callout">
				<a href="<?php echo site_url('products#first-steps'); ?>">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/04/first-steps-pack.png" />
				</a>
			</div>
			<div class="product-callout">
				<a href="<?php echo site_url('products#soul-whisperer'); ?>">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/04/soul-whisperer.png" />
				</a>
			</div>
			<div class="product-callout">
				<a href="<?php echo site_url('products#steps-to-faith'); ?>">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2015/04/steps-to-faith.png" />
				</a>
			</div>
		</div>
	</div>
</section>

<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>
