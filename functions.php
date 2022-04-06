<?php

if ( ! isset( $content_width ) ) {
    $content_width = 624;
}

function dwc_setup() {
    add_editor_style();
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');

    set_post_thumbnail_size( 110, 110, true ); // Default size

    // Make theme available for translation
    // Translations can be filed in the /languages/ directory
    load_theme_textdomain('dwc', get_template_directory() . '/languages');

    register_nav_menus([
        'primary' => __('Header Menu', 'dwc'),
        'secondary' => __('Footer Menu', 'dwc')
    ]);
}
add_action( 'after_setup_theme', 'dwc_setup' );

function dwc_widgets_init() {
    register_sidebar([
        'name' => __( 'Sidebar Widget Area', 'dwc' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'dwc' ),
        'before_widget' => '<div class="widget-block">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

    register_sidebar([
        'name' => __( 'Footer Widget Area', 'dwc' ),
        'id' => 'footer-widget-area',
        'description' => __( 'The footer widget area', 'dwc' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ]);
}
add_action ( 'widgets_init', 'dwc_widgets_init' );

//Multi-level pages menu
function dwc_page_menu() {
    if (is_page()) {
        $highlight = "page_item";
    } else {
        $highlight = "menu-item current-menu-item";
    }

    echo '<ul class="menu">';
    wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=3');
    echo '</ul>';
}

//Single-level pages menu
function dwc_page_menu_flat() {
    if (is_page()) {
        $highlight = "page_item";
    } else {
        $highlight = "menu-item current-menu-item";
    }

    echo '<ul class="menu">';
    wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=1');
    echo '</ul>';
}

function dwc_initialize() {
    if (!is_admin()) {
        wp_deregister_script( 'jquery' );
    }
}
add_action('init', 'dwc_initialize');

// Remove query string from static files
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

/*
 * Print the <title> tag based on what is being viewed.
 */
function dwc_title() {
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
        echo ' | ' . sprintf( __( 'Page %s', 'dwc'), max( $paged, $page ) );
    }
}

function dwc_echo_archive_page_title() {
    global $posts, $post;
    $post = $posts[0]; // Hack. Set $post so that the_date() works.
    if (is_category()) {
        /* If this is a category archive */
        single_cat_title();
    } elseif (is_tag()) {
        /* If this is a tag archive */
        single_tag_title();
    } elseif (is_day()) {
        /* If this is a daily archive */
        echo get_the_time('F jS, Y');
    } elseif (is_month()) {
        /* If this is a monthly archive */
        echo get_the_time('F, Y');
    } elseif (is_year()) {
        /* If this is a yearly archive */
        echo get_the_time('Y');
    } elseif (is_author()) {
        /* If this is an author archive */
        echo 'Posts by '.get_the_author();
    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
        /* If this is a paged archive */
        echo 'Blog Archives';
    }
}

function dwc_clean_og_content($content) {
    return trim(esc_attr(strip_tags(stripslashes($content))));
}

function dwc_build_og_tags() {
    global $dwc_og_tags;

    if (!isset($dwc_og_tags)) {
        $dwc_og_tags = [];
    }

    if (isset($dwc_og_tags['type'], $dwc_og_tags['url'], $dwc_og_tags['title'], $dwc_og_tags['description'])) {
        return;
    }

    $dwc_og_tags['type'] = 'article';
    if (is_singular()) {
        //It's a Post or a Page or an attachment page - It can also be the homepage if it's set as a page
        global $post;
        $dwc_og_tags['title'] = dwc_clean_og_content($post->post_title);
        $dwc_og_tags['url'] = get_permalink();

        $dwc_og_tags['description'] = trim($post->post_excerpt);
        if ( $dwc_og_tags['description'] === '' ) {
            //If no excerpt we grab it from the content
            $dwc_og_tags['description'] = $post->post_content;
        }
        $dwc_og_tags['description'] = dwc_clean_og_content(strip_shortcodes($dwc_og_tags['description']));
        $dwc_og_tags['description'] = substr($dwc_og_tags['description'], 0, 300);
    } else {
        global $wp_query;
        //Other pages - Defaults
        $dwc_og_tags['title'] = dwc_clean_og_content(get_bloginfo('name'));
        $dwc_og_tags['url'] = ((!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  //Not really canonical but will work for now

        $dwc_og_tags['description'] = dwc_clean_og_content(get_bloginfo('description'));

        if (is_category()) {
            $dwc_og_tags['title'] = dwc_clean_og_content(single_cat_title('', false));
            $term = $wp_query->get_queried_object();
            $dwc_og_tags['url'] = get_term_link($term, $term->taxonomy);
            $cat_desc = dwc_clean_og_content(category_description());
            if ($cat_desc != '') {
                $dwc_og_tags['description'] = $cat_desc;
            }
        } elseif (is_tag()) {
            $dwc_og_tags['title'] = dwc_clean_og_content(single_tag_title('', false));
            $term = $wp_query->get_queried_object();
            $dwc_og_tags['url'] = get_term_link($term, $term->taxonomy);
            $tag_desc = dwc_clean_og_content(tag_description());
            if ($tag_desc != '') {
                $dwc_og_tags['description'] = $tag_desc;
            }
        } elseif (is_tax()) {
            $dwc_og_tags['title'] = dwc_clean_og_content(single_term_title('', false));
            $term = $wp_query->get_queried_object();
            $dwc_og_tags['url'] = get_term_link($term, $term->taxonomy);
        } elseif (is_search()) {
            $dwc_og_tags['title'] = dwc_clean_og_content(__('Search for').' "'.get_search_query().'"');
            $dwc_og_tags['url'] = get_search_link();
        } elseif (is_author()) {
            $dwc_og_tags['title'] = dwc_clean_og_content(get_the_author_meta('display_name', get_query_var('author')));
            $dwc_og_tags['url'] = get_author_posts_url(get_query_var('author'), get_query_var('author_name'));
        } elseif (is_archive()) {
            if (is_day()) {
                $dwc_og_tags['title'] = dwc_clean_og_content(get_query_var('day').' '.single_month_title(' ', false).' '.__('Archives'));
                $dwc_og_tags['url'] = get_day_link(get_query_var('year'), get_query_var('monthnum'), get_query_var('day'));
            } elseif (is_month()) {
                $dwc_og_tags['title'] = dwc_clean_og_content(single_month_title(' ', false).' '.__('Archives'));
                $dwc_og_tags['url'] = get_month_link(get_query_var('year'), get_query_var('monthnum'));
            } elseif (is_year()) {
                $dwc_og_tags['title'] = dwc_clean_og_content(get_query_var('year').' '.__('Archives'));
                $dwc_og_tags['url'] = get_year_link(get_query_var('year'));
            }
        } else {
            //Others... Defaults already set up there
        }
    }

    if (is_front_page()) {
        /* Fix homepage type when it's a static page */
        $dwc_og_tags['url'] = home_url().'/';
        $dwc_og_tags['type'] = 'blog';
    }

    //If no description let's just add the title
    if ($dwc_og_tags['description'] == '') {
        $dwc_og_tags['description'] = $dwc_og_tags['title'];
    }
}

function dwc_echo_og_($property) {
    global $dwc_og_tags;

    dwc_build_og_tags();

    echo $dwc_og_tags[$property];
}

function dwc_random_message() {
    $messages = [
        'Nothing to see here.',
        'RELEASE THE KRAKEN!',
    ];

    return $messages[rand(0, count($messages) - 1)];
}
