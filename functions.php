<?php

// DIE WORDPRESS FORMATING DIE IN A FIRE.

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


function mytheme_addbox() {
add_meta_box('postexcerpt', __('Excerpt'), 'post_excerpt_meta_box', 'page', 'post', 'normal', 'core');
}
add_action( 'admin_menu', 'mytheme_addbox' );


// Add in Featured images

add_theme_support( 'post-thumbnails' ); 

// Add in Category classes.

function the_category_unlinked($separator = ' ') {
    $categories = (array) get_the_category();
    
    $thelist = '';
    $i = 0;
    foreach($categories as $category) {    // concate
        $i++;

        if ( $i === 1 ) {
        $thelist .= $separator . $category->category_nicename . "-main";
            } else {
        $thelist .= $separator . $category->category_nicename;
            }
    }
    
    echo $thelist;
}

// Sidebar - clean up category names.

add_filter('wp_list_categories', 'add_slug_css_list_categories');
function add_slug_css_list_categories($list) {

$cats = get_categories();
    foreach($cats as $cat) {
    $find = 'cat-item-' . $cat->term_id . '"';
    $replace = $cat->slug . '"';
    $list = str_replace( $find, $replace, $list );
    $find = 'cat-item-' . $cat->term_id . ' ';
    $replace = $cat->slug . ' ';
    $list = str_replace( $find, $replace, $list );
    }
return $list;
}

// Remove heights and widths from images returned by wordpress.

    // Remove inline width and height added to images.

    add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
    add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

    // Removes attached image sizes as well.

    add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
    function remove_thumbnail_dimensions( $html ) {
            $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
            return $html;
    }

// Add in default JS + CSS.

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js');
    // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', null, null, true);
    // wp_enqueue_script( 'core', get_template_directory_uri() . '/js/bootstrap.js', null, null, true);
}


add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Remove useless junk from Wordpress header.

remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
    remove_action('wp_head', 'wp_generator'); // remove wordpress version

    remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
    remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

    remove_action('wp_head', 'index_rel_link'); // remove link to index page
    remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

    remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );


?>