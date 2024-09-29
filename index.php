<?php get_header(); ?>

<div class="content">

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
		
	<?php endif; ?>

	<?php get_template_part('inc/pagination'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>