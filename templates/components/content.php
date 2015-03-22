<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$fileUrl = '';
		if(has_post_thumbnail()) {
			// Get thumbnail url
			$fileUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large', true);
			$fileUrl = $fileUrl[0];
		} else {
			$uploads = wp_upload_dir();
			$cats = get_the_category();
			$cat = $cats[0];
			$catSlug = $cat->slug;
			$testUrl = $uploads[path].'/'.$catSlug.'.jpg';
			$fileUrl = $uploads[baseurl].'/'.$catSlug.'.jpg';

			if(!file_exists($testUrl)) {
				$catParent = get_category($cat->parent);
				$catParentSlug = $catParent->slug;
				$testUrl = $uploads[path].'/'.$catParentSlug.'.jpg';
				$fileUrl = $uploads[baseurl].'/'.$catParentSlug.'.jpg';

				if(!file_exists($testUrl)) {
					$fileUrl = '';
				}
			}
		}
	?>

	<?php if($fileUrl != '') { ?>
		<div class="article-thumb">
			<img src="<?php echo $fileUrl;?>" alt="<?php the_title_attribute(); ?>" width="100%"/>
		</div>
	<?php } ?>

	<article>
		<?php the_content(); ?>
		<?php if(is_single()) require_once(TEMPLATEPATH . '/templates/components/meta.php' );?>
	</article>
<?php endwhile; ?>

<?php else : ?>
	<h2>Not Found</h2>
<?php endif; ?>
