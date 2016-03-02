<?php
/*
Template Name: Right Column
*/
?>

<?php $sidebarRight = true; ?>

<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<section>
	<div class="container container-sidebar">
		<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
		<aside>
			<?php kvt_sidebar('sidebar'); ?>
		</aside>
	</div>
</section>

<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>
