<?php get_header(); ?>

<div class="content" itemscope itemtype="http://schema.org/Article">

	<div class="stickywrap">

		<h3 class="stickywrap-heading">
			<?php do_action( 'alx_ext_sharrre' ); ?>
		</h3>
		
		<div class="stickywrap-inner">

			<?php while ( have_posts() ): the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemprop="mainEntity" itemtype="http://schema.org/BlogPosting">
					
					<header class="entry-header group">
						<div class="blog-card-category" itemprop="articleSection"><?php the_category(' '); ?></div> 
						<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
						<div class="blog-card-byline group">
							<div class="blog-card-avatar"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" itemprop="author" itemscope itemtype="http://schema.org/Person"><meta itemprop="name" content="<?php the_author(); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'48'); ?></a></div>
							<div class="blog-card-author" itemprop="author" itemscope itemtype="http://schema.org/Person">
								<?php esc_html_e('by','clearer'); ?> <span itemprop="name"><?php the_author_posts_link(); ?></span>
							</div>
							<div class="blog-card-date-single" itemprop="datePublished" content="<?php echo get_the_date('c'); ?>"><?php the_time( get_option('date_format') ); ?></div>
							<meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
						</div>
					
						<?php if ( get_theme_mod( 'header-featured-image', 'on' ) == 'on' ): ?>
						
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="entry-featured-image" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
									<?php the_post_thumbnail('clearer-large', ['itemprop' => 'url']); ?>
									<meta itemprop="width" content="<?php echo wp_get_attachment_metadata(get_post_thumbnail_id())['width']; ?>">
									<meta itemprop="height" content="<?php echo wp_get_attachment_metadata(get_post_thumbnail_id())['height']; ?>">
								</div>
							<?php endif; ?>
							
						<?php endif; ?> 
					
					</header>

					<div class="entry themeform" itemprop="articleBody">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','clearer'),'after'=>'</div>')); ?>
						<div class="clear"></div>
					</div>
					
				</article>
				
				<div class="entry-footer group">

					<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','clearer').'</span> ','','</p>'); ?>
					
					<div class="clear"></div>
					
					<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio" itemprop="author" itemscope itemtype="http://schema.org/Person">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<p class="bio-name" itemprop="name"><?php the_author_meta('display_name'); ?></p>
							<p class="bio-desc" itemprop="description"><?php the_author_meta('description'); ?></p>
							<div class="clear"></div>
						</div>
					<?php endif; ?>
					
					<?php do_action( 'alx_ext_sharrre_footer' ); ?>
					
					<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
					
					<div class="entry-comments themeform" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
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
