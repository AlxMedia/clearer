<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
	
	<div class="blog-card-inner">
		
		<div class="blog-card-left">
		
			<a href="<?php the_permalink(); ?>" class="blog-card-thumb" style="background-image:url('<?php the_post_thumbnail_url('clearer-medium'); ?>');">
		
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

		</div>
		<div class="blog-card-right">
		
			<div class="blog-card-category"><?php the_category(' '); ?></div>
		
			<h2 class="blog-card-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			
			<?php if (get_theme_mod('excerpt-length','20') != '0'): ?>
				<div class="blog-card-excerpt">
					<?php the_excerpt(); ?>
				</div>
			<?php endif; ?>
			
			<div class="blog-card-date"><?php the_time( get_option('date_format') ); ?></div>
			
			<?php if ( get_theme_mod( 'more-link', 'on' ) =='on' ): ?>
				<a class="more-link-custom" href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i></a>
			<?php endif; ?>
			
		</div>

	</div>

</article>