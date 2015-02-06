<div class="article-meta">
	<div class="time"><i class="icon icon-clock"></i> <time datetime="<?php echo date(DATE_W3C); ?>"><?php the_time('F jS, Y') ?></time></div>
	<?php the_tags('<div class="tags"><i class="icon icon-tags"></i> ', ', ', '</div>'); ?>
	<?php the_terms($post->ID,'bible','<div class="books"><i class="icon icon-book"></i> ',', ','</div>');?>
	<?php if(is_category()) { ?>
		<div class="categories"><i class="icon icon-archive"></i> <?php the_category(', ') ?></div> 
	<?php } ?>
</div>