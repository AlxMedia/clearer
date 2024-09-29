<?php $related = clearer_related_posts(); ?>

<?php if ( $related->have_posts() ): ?>

<div class="stickywrap">
	<h3 class="stickywrap-heading">
		<?php esc_html_e('You may also like','clearer'); ?>
	</h3>
	<div class="stickywrap-inner">

		<div class="related-posts group">
			
			<?php while ( $related->have_posts() ) : $related->the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		</div><!--/.related-posts-->
		
	</div>

</div>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
