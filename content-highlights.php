<div class="highlights-card" itemscope itemtype="http://schema.org/BlogPosting">

	<a href="<?php the_permalink(); ?>" class="highlights-card-thumb" style="background-image:url('<?php the_post_thumbnail_url('clearer-small'); ?>');" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
		<?php if ( has_post_thumbnail() ): ?>
			<meta itemprop="url" content="<?php the_post_thumbnail_url('clearer-small'); ?>">
		<?php else: ?>
			<i class="fas fa-image"></i>
		<?php endif; ?>
	</a>
	
	<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
		<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
			<a class="comments-bubble" href="<?php comments_link(); ?>" itemprop="commentCount" content="<?php echo $number; ?>">
				<i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span>
			</a>
		<?php } ?>
	<?php endif; ?>

	<div class="highlights-card-inner">

		<h3 class="highlights-card-title" itemprop="headline">
			<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url"><?php the_title(); ?></a>
		</h3>
		
		<div class="highlights-card-date" itemprop="datePublished" content="<?php echo get_the_date('c'); ?>"><?php the_time( get_option('date_format') ); ?></div>
		<meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
		
		<?php if ( get_theme_mod( 'more-link', 'on' ) =='on' ): ?>
			<a class="more-link-custom" href="<?php the_permalink(); ?>" itemprop="mainEntityOfPage" itemscope itemtype="http://schema.org/WebPage">
				<i class="fas fa-arrow-right"></i>
			</a>
		<?php endif; ?>
		
	</div>
	
</div>
