<?php get_header(); ?>

<div class="content">

	<?php get_template_part('inc/page-title'); ?>
	
	<?php if ( have_posts() ) : ?>
		
		<div class="stickywrap"><div>
			<?php while ( have_posts() ): the_post(); ?>
				<?php
					// Assign the year to a variable
					$year = get_the_date('Y', '', '', FALSE);
					$year_link = get_year_link($year);
					
					// If your year hasn't been echoed earlier in the loop, echo it now
					if (! isset($year_check) || $year !== $year_check) {
						echo "</div></div><div class='stickywrap'><h3 class='stickywrap-heading'><a href='" . $year_link . "'>" . $year . "</a></h3><div class='stickywrap-inner'>";
					}

					// Now that your year has been printed, assign it to the $year_check variable
					$year_check = $year;
				?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
		</div></div>

	<?php else : ?>
		<p><?php esc_html_e('The content you are looking for was not found. You may be interested in the following:', 'clearer'); ?></p>

		
		<?php
		// Fetch the suggested posts count from theme settings, using the correct key
		$suggested_posts_count = get_theme_mod('suggested-posts-count', 5);

		// Check if suggested_posts_count is greater than 0
		if ($suggested_posts_count > 0) :
		?>
			<div class="stickywrap"><div class="stickywrap-inner">
				<?php
				// Query for random posts using get_posts for better control
				$random_posts = get_posts(array(
					'numberposts' => (int) $suggested_posts_count,
					'orderby'     => 'rand'
				));

				if ( !empty($random_posts) ) :
					foreach ( $random_posts as $post ) :
						setup_postdata( $post );
						?>
						<article id="post-<?php the_ID(); ?>" class="blog-card post-<?php the_ID(); ?>">
							
							<div class="blog-card-inner">
								
								<div class="blog-card-left">
									<a href="<?php the_permalink(); ?>" class="blog-card-thumb" style="background-image:url('<?php echo esc_url( get_the_post_thumbnail_url(get_the_ID(), 'clearer-medium') ); ?>');">
									</a>
									
									<?php if ( comments_open() && ( get_comments_number() > 0 ) ): ?>
										<a class="comments-bubble" href="<?php comments_link(); ?>">
											<i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span>
										</a>
									<?php endif; ?>
								</div>

								<div class="blog-card-right">
									<div class="blog-card-category"><?php the_category(' '); ?></div>
								
									<h2 class="blog-card-title">
										<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h2>
									
									<div class="blog-card-excerpt">
										<?php the_excerpt(); ?>
									</div>
									
									<div class="blog-card-date"><?php echo get_the_date(); ?></div>
									
									<a class="more-link-custom" href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
						</article>
						<?php
					endforeach;
					wp_reset_postdata();
				else :
					echo '<p>No suggestions available.</p>';
				endif;
				?>
			</div></div>
		<?php endif; ?>

	<?php endif; ?>

	<?php get_template_part('inc/pagination'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
