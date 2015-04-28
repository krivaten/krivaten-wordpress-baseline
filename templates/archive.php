<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<section>
	<div class="container container-sm">
		<article>
			<?php
				echo category_description();

				if($categories) {
					for($x=0 ; $x < count($categories) ; ++$x) {
						static $count = 0;
						++$count;

						// Clear output
						$output = '';

						// Get subcategory
						$subcategory = $categories[$x];

						if($open) {$collapsed = ""; $in = "in";} else {$collapsed = "collapsed"; $in = "";}

						// Subcategory query
						$subcategoryQuery = new WP_Query(array('category_name' => $subcategory->slug, 'orderby' => 'post_date'));

						echo '<div class="list-group">';
							echo '<h2>'.$subcategory->name.'</h2>';
							echo '<ul>';
								// Loop through subcategory posts
								while($subcategoryQuery->have_posts()) {
									$subcategoryQuery->the_post();
									echo '<li><a href="'.get_permalink().'" title="'.get_the_title().'" class="list-group-item">'.get_the_title().'</a></li>';
								}
							echo '</ul>';
						echo '</div>';

						wp_reset_query();
					}
				}
			?>
		</article>

		<?php } else { ?>
			<?php $showExcerpt = true; ?>
			<?php require_once(TEMPLATEPATH . '/templates/components/excerpt.php' ); ?>
		<?php } ?>
	</div>
</section>

<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>
