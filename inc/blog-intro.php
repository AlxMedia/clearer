<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
<div class="stickywrap">
	
	<h3 class="stickywrap-heading">
		<i class="far fa-user"></i>
	</h3>
	
	<div class="stickywrap-inner">
	
		<div class="intro-card-inner">

			<?php if ( get_theme_mod('profile-image') ): ?>
				<div class="intro-card-thumb">
					<img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" />
				</div>
			<?php endif; ?>

			<?php if ( get_theme_mod('profile-name') ): ?>
				<h2 class="intro-card-title">
					<?php echo esc_html( get_theme_mod('profile-name') ); ?>
				</h2>
			<?php endif; ?>
			
			<?php if ( get_theme_mod('profile-description') ): ?>
				<div class="intro-card-desc">
					<?php echo wp_kses_post( get_theme_mod('profile-description') ); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( get_theme_mod( 'profile-social', 'on' ) == 'on' ): ?>
				<?php clearer_social_links() ; ?>
			<?php endif; ?>
			
		</div>

	</div>
	
</div>
<?php endif; ?>