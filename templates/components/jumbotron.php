<?php
	global $wp_query;
	$postid = $wp_query->post->ID;
	$banner_image = get_post_meta($postid, 'banner_image', true);
	$banner_image = $banner_image ? $banner_image : get_option("kvt_banner_url");
	$banner_text = get_post_meta($postid, 'banner_text', true);
	$banner_height = get_post_meta($postid, 'banner_height', true);
	$banner_height = $banner_height ? $banner_height + 60 : "";
	wp_reset_query();
?>

<section class="jumbotron" style="
	<?php if ($banner_image) echo "background-image: url($banner_image);" ?>
	<?php if ($banner_height) echo "min-height: ".$banner_height."px;" ?>
">
	<div class="jumbotron-title">
		<?php if($banner_text) { ?>
			<h1><?php echo $banner_text ?></h1>
		<?php } elseif(is_page('home')) { ?>
			<h1>
				<? echo $urlBlogger; ?>
				<span>together</span>
				we can make the retreat
				<span>home again</span>
			</h1>
		<?php } else { ?>
			<?php if(is_tax()) { ?>
				<h1><?php single_tag_title(); ?></h1>
			<?php } elseif(is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>
			<?php } elseif(is_tag()) { ?>
				<h1><?php single_tag_title(); ?></h1>
			<?php } elseif(is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
			<?php } elseif(is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>
			<?php } elseif(is_year()) { ?>
				<h1>Archive for <?php the_time('Y'); ?></h1>
			<?php } elseif(is_author()) { ?>
				<h1>Author Archive</h1>
			<?php } elseif(isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1>Blog Archives</h1>
			<?php } elseif(is_home()) { ?>
				<h1>Blog</h1>
			<?php } elseif(is_search()) { ?>
				<h1>Search results for <br />&quot;<?php the_search_query() ?>&quot;</h1>
			<?php } else { ?>
				<h1><?php the_title(); ?></h1>
				<?php
					$subTitle = get_post_custom_values('subTitle', get_the_id());
					if ($subTitle) {
						echo '<p>'.$subTitle[0].'</p>';
					}
				?>
			<?php } ?>
		<?php } ?>
	</div>
</section>
