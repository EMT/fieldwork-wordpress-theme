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

// Fixes Pagination on homepage ( wordpress hates home.php ).

function my_post_queries( $query ) {
     // do not alter the query on wp-admin pages and only alter it if it's the main query
    if (!is_admin() && $query->is_main_query()){
        // alter the query for the home and category pages 

        if(is_home()){
           $query->set('posts_per_page', 20);
        }

        if(is_category()){
            $query->set('posts_per_page', 20);
        }
    }
}
add_action( 'pre_get_posts', 'my_post_queries' );

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
    wp_enqueue_script( 'bquery', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js');
    wp_enqueue_script( 'touchSwipe', get_template_directory_uri() . '/js/jquery.touchSwipe.js');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js');
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

    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

// Post Images layout.

function imageGallery($atts, $content = null) {
    extract(shortcode_atts(array(
     "id" => '0'
    ), $atts));
 
    // Wrapper for the whole thing.
    $preWrapper = '<div class="images-wrapper"><div class="images">';
    
    // Do we have any rows ?
    if( have_rows('image_gallery') ): while ( have_rows('image_gallery') ) : the_row();
       
            // Do those rows have an ID matching the ID we set as an attribute?
            if( get_sub_field('id') == $id ) {

                $cols = get_sub_field('cols');
                $layout = $cols;

                // Lets get all the images related to that ID.
                while( have_rows('images') ): the_row();

                    $link = get_sub_field('image');

                    // Video Stuffs.

                    if ( get_sub_field('video_url') ) {
                        $video_url = '<div class="play" data-video="'.get_sub_field('video_url').'"></div>';
                        $video = 'blog-video';
                    } else {
                        $video_url = '';
                        $video = '';
                    }


                    // Do we want a link with that image ?
                    if ( get_sub_field('link') == 'true' ) {
                        $preLinkWrapper = '<a href="'.$link.'"/>';
                        $postLinkWrapper = '</a>';
                    } else {
                        $preLinkWrapper = '';
                        $postLinkWrapper = '';
                    }

                    // Does each image have a caption, if so show it.
                    if ( get_sub_field('caption') ) {
                        $caption = '<span class="caption cat-highlight">'.get_sub_field('caption').'</span>';
                    } else {
                        $caption = '';
                    }


                    //  Alternative more complex layouts

                        if ( $cols == '2top-3bottom') {
                            $colCounter++;
                            if ( $colCounter <= 2 ) {
                                $layout = 2;
                            } else {
                                $layout = 3;
                            }
                        } else if ($cols == '3top-1bottom') {
                            $colCounter++;
                            if ( $colCounter == 4 ) {
                                $layout = 1;
                            } else {
                                $layout = 3;
                            }
                        } else if ($cols == '1top-2bottom') {
                            $colCounter++;
                            if ( $colCounter <= 1 ) {
                                $layout = 1;
                            } else {
                                $layout = 2;
                            }
                        }

                    // Outputting each image.
                    $output .='<div class="'.$video.' image-col-'.$layout.'">'.$preLinkWrapper.'<img src="'.$link.'"/>'.$video_url.$postLinkWrapper.$caption.'</div>';

                endwhile;
                
            };
        
    endwhile; endif;
 
    // Container for the images.
    $postWrapper ='</div></div>';

    // Outputting the whole thing.
    return $preWrapper . $output . $postWrapper;
}

// Dont forget the shortcode! 
add_shortcode('images', 'imageGallery');