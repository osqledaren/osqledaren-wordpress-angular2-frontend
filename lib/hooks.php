<?php

add_theme_support( 'post-thumbnails' );

/**
 * Registers theme assets.
 */
function osqledaren_register_assets(){
    if(is_admin()) return;
    wp_enqueue_style('osqledaren-headless-css', get_stylesheet_uri());
}
add_action('after_setup_theme', 'osqledaren_register_assets');

/**
 * Changes the preview link for post, pointing to the corresponding link on the single page app.
 * @return string
 */
function osqledaren_preview_link() {
    $slug = basename(get_the_id());
    $host = 'http://localhost:4200';
    $sub = '/artikel-preview/';
    $new_preview_url = $host . $sub . $slug;
    return $new_preview_url;
}


add_filter( 'previeew_post_link', 'osqledaren_preview_link' );