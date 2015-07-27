<section class="jumbotron">
	<div class="jumbotron-title">
		<?php if(is_page('home')) { ?>
			<h1>
				we supply <span>everything</span> but the <span>memory</span>
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
