<?php if ( is_single() ): ?>
	
	<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'sidebar' ) { ?>
	<div class="stickywrap">
		<h3 class="stickywrap-heading">
			<i class="fas fa-pencil"></i>
		</h3>
	</div>
	<?php } ?>
	
	<ul class="post-nav group">
		<li class="next"><?php next_post_link('%link', '<i class="fas fa-chevron-right"></i><strong>'.esc_html__('Next', 'clearer').'</strong> <span>%title</span>'); ?></li>
		<li class="previous"><?php previous_post_link('%link', '<i class="fas fa-chevron-left"></i><strong>'.esc_html__('Previous', 'clearer').'</strong> <span>%title</span>'); ?></li>
	</ul>
	
<?php endif; ?>