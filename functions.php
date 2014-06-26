<?php

// Add in default JS + CSS

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js');
    // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', null, null, true);
    // wp_enqueue_script( 'core', get_template_directory_uri() . '/js/bootstrap.js', null, null, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Remove useless junk from Wordpress header

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