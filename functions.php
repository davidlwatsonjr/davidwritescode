<?php
if ( ! isset( $content_width ) )
	$content_width = 624;
	

add_action( 'after_setup_theme', 'lcb_setup' );


function lcb_setup() {
	
add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

set_post_thumbnail_size( 110, 110, true ); // Default size

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('lcb', get_template_directory() . '/languages');

register_nav_menus(
	array(
	  'primary' => __('Header Menu', 'lcb'),
	  'secondary' => __('Footer Menu', 'lcb')
	)
);

}
	
function lcb_widgets_init() {
    register_sidebar(array(
		'name' => __( 'Sidebar Widget Area', 'lcb' ),
		'id' => 'sidebar-widget-area',
		'description' => __( 'The sidebar widget area', 'lcb' ),
		'before_widget' => '<div class="widgetBlock">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',        
    ));
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'lcb' ),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', 'lcb' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}

add_action ( 'widgets_init', 'lcb_widgets_init' );

function lcb_init_method() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js');
        wp_enqueue_script( 'jquery' );
    }


if ( !is_admin() ) {
   wp_register_script('custom_script',
   get_template_directory_uri() . '/js/custom-jquery-script.js');
   wp_enqueue_script('custom_script');
   }       
}

add_action('init', 'lcb_init_method');

//Multi-level pages menu
function lcb_page_menu() {
	if (is_page()) { $highlight = "page_item"; } else {$highlight = "menu-item current-menu-item"; }
	echo '<ul class="menu">';
	wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=3');
	echo '</ul>';
}

//Single-level pages menu
function lcb_page_menu_flat() {
	if (is_page()) { $highlight = "page_item"; } else {$highlight = "menu-item current-menu-item"; }
	echo '<ul class="menu">';
	wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=1');
	echo '</ul>';
}

/*
 * Print the <title> tag based on what is being viewed.
 */
function davidwritescode_title() {
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		echo " | $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		echo ' | ' . sprintf( __( 'Page %s', 'lcb'), max( $paged, $page ) );
	}
}

function davidwritescode_random_message() {
	$messages = array(
		'Nothing to see here.',
		'RELEASE THE KRAKEN!',
	);
	
	return $messages[rand(0, count($messages) - 1)];
}