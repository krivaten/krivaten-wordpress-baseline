<section class="article-archive">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article>
			<h4 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
			<div class="entry-content">
				<?php if($showExcerpt) the_excerpt(); ?>
			</div>
		</article>
	<?php endwhile; ?>
</section>

<?php include (TEMPLATEPATH . '/templates/components/pager.php' ); ?>

<?php else : ?>
	<h2>Not Found</h2>
<?php endif; ?>
