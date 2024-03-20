<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'timelines', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'timelines' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'timelines' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'timelines' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'timelines' ),
	'button_url'  => 'https://wordpress.org/support/theme/timelines/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'timelines' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'timelines' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'timelines' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'timelines' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'timelines' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'timelines' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'timelines' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'timelines' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Recommended Plugins
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'timelines' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'timelines' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Excerpt Length
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'timelines' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'timelines' ),
	'section'		=> 'blog',
	'default'		=> '20',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts Exclude', 'timelines' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'timelines' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'timelines' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'timelines' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'timelines' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'timelines' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'timelines' ),
	'section'		=> 'blog',
	'default'		=> '5',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'timelines' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'timelines' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'timelines' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'timelines' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'timelines' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'timelines' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'timelines' ),
		'categories'=> esc_html__( 'Related by categories', 'timelines' ),
		'tags'		=> esc_html__( 'Related by tags', 'timelines' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'timelines' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'timelines' ),
	'section'		=> 'blog',
	'default'		=> 'sidebar',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'timelines' ),
		'sidebar'	=> esc_html__( 'Sidebar', 'timelines' ),
		'content'	=> esc_html__( 'Below content', 'timelines' ),
	),
) );
// Header: Search
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'timelines' ),
	'description'	=> esc_html__( 'Header search button', 'timelines' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'timelines' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'timelines' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Widget Columns
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'timelines' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'timelines' ),
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
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'timelines' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'timelines' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'timelines' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'timelines' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'timelines' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'timelines' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'timelines' ),
	'description'	=> esc_html__( 'Footer credit text', 'timelines' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );


function timelines_kirki_sidebars_select() { 
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
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'timelines' ),
		'description'	=> esc_html__( '(is_home) Primary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_html__( 'Home', 'timelines' ),
		'description'	=> esc_html__( '(is_home) Secondary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'timelines' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_html__( 'Single', 'timelines' ),
		'description'	=> esc_html__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'timelines' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_html__( 'Archive', 'timelines' ),
		'description'	=> esc_html__( '(is_archive) Secondary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'timelines' ),
		'description'	=> esc_html__( '(is_category) Primary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'timelines' ),
		'description'	=> esc_html__( '(is_category) Secondary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'timelines' ),
		'description'	=> esc_html__( '(is_search) Primary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_html__( 'Search', 'timelines' ),
		'description'	=> esc_html__( '(is_search) Secondary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'timelines' ),
		'description'	=> esc_html__( '(is_404) Primary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_html__( 'Error 404', 'timelines' ),
		'description'	=> esc_html__( '(is_404) Secondary', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'timelines' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	Kirki::add_field( 'timelines_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_html__( 'Default Page', 'timelines' ),
		'description'	=> esc_html__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'timelines' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'timelines' ),
	) );
	
 } 
add_action( 'init', 'timelines_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'timelines' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'timelines' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'timelines' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'timelines' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'timelines' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'timelines' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'timelines' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'timelines' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'timelines' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'timelines' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'timelines' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'timelines' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'timelines' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'timelines' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'timelines' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'timelines' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'timelines' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'timelines' ),
	'description'	=> esc_html__( 'Select font for the theme', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'timelines' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'timelines' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'timelines' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'timelines' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'timelines' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'timelines' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'timelines' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'timelines' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'timelines' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'timelines' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'timelines' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'timelines' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'timelines' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'timelines' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'timelines' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'timelines' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'timelines' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'timelines' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'timelines' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'timelines' ),
		'arial'					=> esc_html__( 'Arial', 'timelines' ),
		'georgia'				=> esc_html__( 'Georgia', 'timelines' ),
		'verdana'				=> esc_html__( 'Verdana', 'timelines' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'timelines' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'timelines' ),
	'description'	=> esc_html__( 'Max-width of the container with boxed layout.', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> '1680',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'timelines' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> '720',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'timelines' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Light
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'light-theme',
	'label'			=> esc_html__( 'Light Theme', 'timelines' ),
	'description'	=> esc_html__( 'Use light instead of dark base', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'timelines' ),
	'description'	=> esc_html__( 'Do not use with light theme enabled', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Light Logo Color', 'timelines' ),
	'description'	=> esc_html__( 'Change color for the logo in light mode', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Accent Color
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-accent',
	'label'			=> esc_html__( 'Accent Color', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> '#1a9fff',
) );
// Styling: Header Color
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> '#2d333c',
) );
// Styling: Background Color
Kirki::add_field( 'timelines_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'timelines' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
