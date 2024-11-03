<?php get_header(); ?>

<div class="content">

	<?php get_template_part('inc/page-title'); ?>

	<?php if ( have_posts() ) : ?>
		
		<div class="stickywrap">
			<div class="stickywrap-inner">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
			</div>
		</div>
		
	<?php endif; ?>

	<?php get_template_part('inc/pagination'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>