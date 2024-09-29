<?php 
	$sidebar = clearer_sidebar_primary();
	$layout = clearer_layout_class();
	if ( $layout != 'col-1c'):
?>

<div class="sidebar">
	<div class="sidebar-content">
	
		<?php if ( is_home() && !is_paged() ): ?>
			<?php get_template_part('inc/blog-intro'); ?>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'sidebar' ) { get_template_part('inc/post-nav'); } ?>
		
		<?php dynamic_sidebar($sidebar); ?>
	</div>
</div>

<?php endif; ?>