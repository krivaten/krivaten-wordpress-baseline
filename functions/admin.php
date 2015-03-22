<?php

/**
 * Create admin page for theme
 */
function add_admin_page() {
	add_submenu_page('themes.php', 'Krivaten Theme Admin', 'Theme Admin', 'manage_options', 'kvt_admin', 'kvt_settings');
}
add_action('admin_menu', 'add_admin_page');


/**
 * All the settings options
 */
function kvt_settings() {
	if (!current_user_can('manage_options')) {
		wp_die('You do not have sufficient permissions to access this page.');
	}

	// Update databse on submit
	if (isset($_POST["update_settings"])) {

		$emailAdd = esc_attr($_POST["kvt_email_add"]);
		update_option("kvt_email_add", $emailAdd);

		$phoneNum = esc_attr($_POST["kvt_phone_num"]);
		update_option("kvt_phone_num", $phoneNum);

		$urlBlogger = esc_attr($_POST["kvt_blogger_url"]);
		update_option("kvt_blogger_url", $urlBlogger);

		$urlFacebook = esc_attr($_POST["kvt_facebook_url"]);
		update_option("kvt_facebook_url", $urlFacebook);

		$urlTwitter = esc_attr($_POST["kvt_twitter_url"]);
		update_option("kvt_twitter_url", $urlTwitter);

		$urlLinkedIn = esc_attr($_POST["kvt_linkedin_url"]);
		update_option("kvt_linkedin_url", $urlLinkedIn);

		$urlHouzz = esc_attr($_POST["kvt_houzz_url"]);
		update_option("kvt_houzz_url", $urlHouzz);

		$urlInstagram = esc_attr($_POST["kvt_instagram_url"]);
		update_option("kvt_instagram_url", $urlInstagram);

		$urlGoogle = esc_attr($_POST["kvt_google_url"]);
		update_option("kvt_google_url", $urlGoogle);

		$urlPinterest = esc_attr($_POST["kvt_pinterest_url"]);
		update_option("kvt_pinterest_url", $urlPinterest);

		$urlSkype = esc_attr($_POST["kvt_skype_url"]);
		update_option("kvt_skype_url", $urlSkype);

		$urlVideo = esc_attr($_POST["kvt_video_url"]);
		update_option("kvt_video_url", $urlVideo);


		$googleAnalytics = esc_attr($_POST["kvt_google_analytics"]);
		update_option("kvt_google_analytics", $googleAnalytics);

		?>
		<div id="message" class="updated">Settings saved</div>
		<?php
	}

	// Get values for form
	$emailAdd    	= get_option("kvt_email_add");
	$phoneNum    	= get_option("kvt_phone_num");
	$urlBlogger    	= get_option("kvt_blogger_url");
	$urlFacebook    = get_option("kvt_facebook_url");
	$urlTwitter     = get_option("kvt_twitter_url");
	$urlLinkedIn    = get_option("kvt_linkedin_url");
	$urlHouzz   	= get_option("kvt_houzz_url");
	$urlInstagram   = get_option("kvt_instagram_url");
	$urlGoogle      = get_option("kvt_google_url");
	$urlPinterest   = get_option("kvt_pinterest_url");
	$urlSkype       = get_option("kvt_skype_url");
	$urlVideo       = get_option("kvt_video_url");

	$googleAnalytics = get_option("kvt_google_analytics");

?>
	<div class="wrap">
		<?php screen_icon('themes'); ?> <h2>Krivaten Theme Admin</h2>

		<form method="POST" action="">
			<h3>Contact Information</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="kvt_phone_num">Phone Number:</label>
					</th>
					<td>
						<input type="text" id="kvt_phone_num" name="kvt_phone_num" value="<?php echo $phoneNum;?>" size="25" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="kvt_email_add">Email Address:</label>
					</th>
					<td>
						<input type="text" id="kvt_email_add" name="kvt_email_add" value="<?php echo $emailAdd;?>" size="25" />
					</td>
				</tr>
			</table>
			<h3>Social Media</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="kvt_blogger_url">Blogger Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_blogger_url" name="kvt_blogger_url" value="<?php echo $urlBlogger;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_facebook_url">Facebook Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_facebook_url" name="kvt_facebook_url" value="<?php echo $urlFacebook;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_twitter_url">Twitter Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_twitter_url" name="kvt_twitter_url" value="<?php echo $urlTwitter;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_linkedin_url">LinkedIn Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_linkedin_url" name="kvt_linkedin_url" value="<?php echo $urlLinkedIn;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_houzz_url">Houzz Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_houzz_url" name="kvt_houzz_url" value="<?php echo $urlHouzz;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_instagram_url">Instagram Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_instagram_url" name="kvt_instagram_url" value="<?php echo $urlInstagram;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_google_url">Google Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_google_url" name="kvt_google_url" value="<?php echo $urlGoogle;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_pinterest_url">Pinterest Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_pinterest_url" name="kvt_pinterest_url" value="<?php echo $urlPinterest;?>" size="25" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="kvt_skype_url">Skype Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_skype_url" name="kvt_skype_url" value="<?php echo $urlSkype;?>" size="25" />
					</td>
				</tr>
				<tr valign="top">
					<th scope="row">
						<label for="kvt_video_url">Video Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_video_url" name="kvt_video_url" value="<?php echo $urlVideo;?>" size="25" />
					</td>
				</tr>
			</table>

			<h3>Google Analytics</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="kvt_google_analytics">Google Analytics Code:</label>
					</th>
					<td>
						<input type="text" id="kvt_google_analytics" name="kvt_google_analytics" value="<?php echo $googleAnalytics;?>" size="25" />
					</td>
				</tr>
			</table>

			<input type="hidden" name="update_settings" value="true" />
			<p>
				<input type="submit" value="Save settings" class="button-primary"/>
			</p>
		</form>
	</div>
<?php } ?>
