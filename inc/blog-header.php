<?php
// Query featured entries
$featured = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('featured-posts-count','4') ),
		'cat'						=> absint( get_theme_mod('featured-category','') )
	)
);
// Query highlight entries
$highlight = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('highlight-posts-count','6') ),
		'cat'						=> absint( get_theme_mod('highlight-category','') )
	)
);
?>

<?php if ( is_home() && !is_paged() ): ?>
	
	
	<?php if ( ( get_theme_mod('featured-posts-count','4') !='0') && $featured->have_posts() ): ?>
		<div class="stickywrap">
			
			<h3 class="stickywrap-heading"><?php esc_html_e('Featured','clearer'); ?></h3>
			
			<div class="stickywrap-inner">

				<div class="featured-wrap group">
			
					<div class="slick-featured">
							<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
								<div>	
									<?php get_template_part('content-featured'); ?>
								</div>
							<?php endwhile; ?>
					</div>
					<div class="slick-featured-nav slick-posts-nav"></div>
						
				</div>

			</div>	
			
		</div>
	<?php endif; ?>
	
	<?php if ( ( get_theme_mod('highlight-posts-count','6') !='0') && $highlight->have_posts() ): ?>
		<div class="stickywrap">
			
			<h3 class="stickywrap-heading"><?php esc_html_e('Highlights','clearer'); ?></h3>
			
			<div class="stickywrap-inner">
				
				<div class="highlights-wrap group">
			
					<div class="slick-highlights">
							<?php while ( $highlight->have_posts() ): $highlight->the_post(); ?>
								<div>	
									<?php get_template_part('content-highlights'); ?>
								</div>
							<?php endwhile; ?>
					</div>
					<div class="slick-highlights-nav slick-posts-nav"></div>
					
				</div>
				
			</div>	
			
		</div>
	<?php endif; ?>
	
	<?php if ( get_theme_mod( 'header-comments', 'on' ) =='on' ): ?>
		<div class="stickywrap">
			
			<h3 class="stickywrap-heading"><?php esc_html_e('Recent Comments','clearer'); ?></h3>
			
			<div class="stickywrap-inner">
				
				<div class="header-comments-wrap">

					<?php $comments = get_comments(array('number'=>3,'status'=>'approve','post_status'=>'publish')); ?>
					<div class="group">
						<ul class="header-comments group">	
							<?php foreach ($comments as $comment): ?>
							<li>
								<a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>" class="group">
									<span class="header-comments-avatar"><?php echo get_avatar($comment->comment_author_email,$size='96'); ?></span>
									<?php $str=explode(' ',get_comment_excerpt($comment->comment_ID)); $comment_excerpt=implode(' ',array_slice($str,0,11)); if(count($str) > 11 && substr($comment_excerpt,-1)!='.') $comment_excerpt.='...' ?>
									<span class="header-comments-inner">
										<strong class="header-comments-title"><?php echo esc_html( $comment->comment_author ); ?>:</strong>
										<i class="header-comments-excerpt"><?php echo esc_html( $comment_excerpt ); ?></i>
										<i class="fa fa-comment"></i>
									</span>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				
				</div>
				
			</div>	
			
		</div>
	<?php endif; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
