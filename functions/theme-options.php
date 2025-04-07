<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'clearer', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'clearer' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'clearer' ),
	'button_url'  => 'https://agnarson.com/wpthemes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'clearer' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'clearer' ),
	'button_url'  => 'https://wordpress.org/support/theme/clearer/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'clearer' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'clearer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'clearer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'profile', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Profile', 'clearer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'clearer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'clearer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'clearer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'clearer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'clearer' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Recommended Plugins
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'clearer' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'clearer' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Search Field
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-search',
	'label'			=> esc_html__( 'Search Field', 'clearer' ),
	'description'	=> esc_html__( 'Subheader search field', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Featured Posts Include
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts Exclude', 'clearer' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'clearer' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'clearer' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'clearer' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Highlight Category
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'select',
	'settings'		=> 'highlight-category',
	'label'			=> esc_html__( 'Highlight Category', 'clearer' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'clearer' ),
) );
// Blog: Highlights Category Count
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'highlight-posts-count',
	'label'			=> esc_html__( 'Highlight Post Count', 'clearer' ),
	'description'	=> esc_html__( 'Max number of highlight posts to display. Set it to 0 to disable.', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> '6',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '12',
		'step'	=> '1',
	),
) );
// Blog: Search Field
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-comments',
	'label'			=> esc_html__( 'Recent Comments', 'clearer' ),
	'description'	=> esc_html__( 'Shown above in the home header', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Excerpt Length
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'clearer' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> '20',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'clearer' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: More Link
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'more-link',
	'label'			=> esc_html__( 'More Link', 'clearer' ),
	'description'	=> esc_html__( 'Arrow buttons for each entry', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Featured Image
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-featured-image',
	'label'			=> esc_html__( 'Single - Featured Image', 'clearer' ),
	'description'	=> esc_html__( 'Auto-display featured image in the blog header', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'clearer' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'clearer' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'clearer' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'clearer' ),
		'content'	=> esc_html__( 'Below content', 'clearer' ),
	),
) );
// Blog: Single - Related Posts
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'clearer' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'clearer' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'clearer' ),
		'categories'=> esc_html__( 'Related by categories', 'clearer' ),
		'tags'		=> esc_html__( 'Related by tags', 'clearer' ),
	),
) );
// Profile: Profile Image
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'clearer' ),
	'description'	=> esc_html__( 'Square size ', 'clearer' ),
	'section'		=> 'profile',
	'default'		=> '',
) );
// Profile: Profile Name
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'clearer' ),
	'description'	=> esc_html__( 'Your name appears beside the image', 'clearer' ),
	'section'		=> 'profile',
	'default'		=> '',
) );
// Profile: Profile Description
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'clearer' ),
	'description'	=> esc_html__( 'A short description of you', 'clearer' ),
	'section'		=> 'profile',
	'default'		=> '',
) );
// Profile: Social Links
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'profile-social',
	'label'			=> esc_html__( 'Profile Social Links', 'clearer' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'clearer' ),
	'section'		=> 'profile',
	'default'		=> 'on',
) );
// Footer: Widget Columns
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'clearer' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'clearer' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'clearer' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'clearer' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'clearer' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'clearer' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'clearer' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'clearer' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'clearer' ),
	'description'	=> esc_html__( 'Footer credit text', 'clearer' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'clearer' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'clearer' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'clearer' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'clearer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'clearer' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'clearer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'clearer' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'clearer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'clearer' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'clearer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'clearer' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'clearer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'clearer' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'clearer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'clearer' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'clearer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );

function clearer_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'clearer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'clearer' ),
		'description'	=> esc_html__( '(is_home) Primary', 'clearer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearer' ),
	) );
	Kirki::add_field( 'clearer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'clearer' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'clearer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearer' ),
	) );
	Kirki::add_field( 'clearer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'clearer' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'clearer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearer' ),
	) );
	Kirki::add_field( 'clearer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'clearer' ),
		'description'	=> esc_html__( '(is_category) Primary', 'clearer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearer' ),
	) );
	Kirki::add_field( 'clearer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'clearer' ),
		'description'	=> esc_html__( '(is_search) Primary', 'clearer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearer' ),
	) );
	Kirki::add_field( 'clearer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'clearer' ),
		'description'	=> esc_html__( '(is_404) Primary', 'clearer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearer' ),
	) );
	Kirki::add_field( 'clearer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'clearer' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'clearer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearer' ),
	) );
	
 } 
add_action( 'init', 'clearer_kirki_sidebars_select', 999 ); 
// Social Links: List
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'clearer' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'clearer' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'clearer' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'clearer' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'clearer' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'clearer' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'clearer' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'clearer' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'clearer' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'clearer' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'clearer' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'clearer' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'clearer' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'clearer' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'clearer' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'clearer' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'clearer' ),
	'description'	=> esc_html__( 'Select font for the theme', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'clearer' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'clearer' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'clearer' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'clearer' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'clearer' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'clearer' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'clearer' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'clearer' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'clearer' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'clearer' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'clearer' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'clearer' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'clearer' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'clearer' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'clearer' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'clearer' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'clearer' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'clearer' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'clearer' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'clearer' ),
		'arial'					=> esc_html__( 'Arial', 'clearer' ),
		'georgia'				=> esc_html__( 'Georgia', 'clearer' ),
		'verdana'				=> esc_html__( 'Verdana', 'clearer' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'clearer' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'clearer' ),
	'description'	=> esc_html__( 'Max-width of the container', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> '1280',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'clearer' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> '774',
	'choices'     => array(
		'min'	=> '400',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'clearer' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Dark
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark-theme',
	'label'			=> esc_html__( 'Dark Theme', 'clearer' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'clearer' ),
	'description'	=> esc_html__( 'Do not use with dark theme enabled', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Dark Logo Color', 'clearer' ),
	'description'	=> esc_html__( 'Change color for the logo in dark mode', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Sticky Header
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'sticky-header',
	'label'			=> esc_html__( 'Sticky Header', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Sticky Sidebar
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'sticky-sidebar',
	'label'			=> esc_html__( 'Sticky Sidebar', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Text Hover
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-hover-text',
	'label'			=> esc_html__( 'Text Hover Color', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> '#3399ff',
) );
// Styling: More Link
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-more-link',
	'label'			=> esc_html__( 'More Link Color', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> '#e2e7ef',
) );
// Styling: Comment Bubble
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-comment-bubble',
	'label'			=> esc_html__( 'Comment Bubble Color', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Background Color
Kirki::add_field( 'clearer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'clearer' ),
	'section'		=> 'styling',
	'default'		=> '#fbfbfc',
) );