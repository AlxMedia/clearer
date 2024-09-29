<?php get_header(); ?>

<div class="content">

	<div class="stickywrap">

		<h3 class="stickywrap-heading">
			<?php do_action( 'alx_ext_sharrre' ); ?>
		</h3>
		
		<div class="stickywrap-inner">

			<?php while ( have_posts() ): the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<header class="entry-header group">
						<div class="blog-card-category"><?php the_category(' '); ?></div>	
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="blog-card-byline group">
							<div class="blog-card-avatar"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'48'); ?></a></div>
							<div class="blog-card-author"><?php esc_html_e('by','clearer'); ?> <?php the_author_posts_link(); ?></div>
							<div class="blog-card-date-single"><?php the_time( get_option('date_format') ); ?></div>
						</div>
					
						<?php if ( get_theme_mod( 'header-featured-image', 'on' ) == 'on' ): ?>
						
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="entry-featured-image">
									<?php the_post_thumbnail('clearer-large'); ?>
									<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
										<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
											<a class="comments-bubble" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
										<?php } ?>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							
						<?php endif; ?>	
					
					</header>

					<div class="entry themeform">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','clearer'),'after'=>'</div>')); ?>
						<div class="clear"></div>
					</div>
					
				</article>
				
				<div class="entry-footer group">

					<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','clearer').'</span> ','','</p>'); ?>
					
					<div class="clear"></div>
					
					<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
							<p class="bio-desc"><?php the_author_meta('description'); ?></p>
							<div class="clear"></div>
						</div>
					<?php endif; ?>
					
					<?php do_action( 'alx_ext_sharrre_footer' ); ?>
					
					<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
					
					<div class="entry-comments themeform">
						<?php comments_template(); ?>
					</div>

				</div><!--/.entry-footer-->

			<?php endwhile; ?>

		</div>
		
	</div>
	
	<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>