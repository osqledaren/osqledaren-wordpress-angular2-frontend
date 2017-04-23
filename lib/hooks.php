<?php

add_theme_support( 'post-thumbnails' );

/**
 * Registers theme assets.
 */
function osqledaren_register_assets(){
    if(is_admin()) return;
    wp_enqueue_style('osqledaren-angular2-css', get_stylesheet_uri());
}
add_action('after_setup_theme', 'osqledaren_register_assets');

/**
 * Changes the preview link for post, pointing to the corresponding link on the single page app.
 * @return string
 */
function osqledaren_preview_link($link) {

    $app_url = get_option('osqledaren_angular2_app_url');
    $app_url = rtrim($app_url, '/');

    if(empty($app_url)){
        return $link;
    }

    $slug = basename(get_the_id());
    $host = $app_url;
    $sub = '/artikel/';
    $new_preview_url = $host . $sub . $slug;
    return $new_preview_url;
}

add_filter( 'preview_post_link', 'osqledaren_preview_link' );