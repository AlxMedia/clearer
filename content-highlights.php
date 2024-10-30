<div class="highlights-card">

	<a href="<?php the_permalink(); ?>" class="highlights-card-thumb" style="background-image:url('<?php the_post_thumbnail_url('clearer-small'); ?>');">
		
		<?php if ( has_post_thumbnail() ): ?>
			
		<?php else: ?>
			<i class="fas fa-image"></i>
		<?php endif; ?>
	
	</a>
	
	<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
		<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
			<a class="comments-bubble" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
		<?php } ?>
	<?php endif; ?>

	<div class="highlights-card-inner">

		<h3 class="highlights-card-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>
		
		<div class="highlights-card-date"><?php the_time( get_option('date_format') ); ?></div>
		
		<?php if ( get_theme_mod( 'more-link', 'on' ) =='on' ): ?>
			<a class="more-link-custom" href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i></a>
		<?php endif; ?>
		
	</div>
	
</div>