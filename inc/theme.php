<?php

add_action('init', 'remove_head_junk');
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action('wp_enqueue_scripts', 'enqueue_styles');

if (!function_exists('enqueue_scripts')) {
    function enqueue_scripts()
    {
        wp_enqueue_script('main', THEME_DIR . '/dist/css/main.js');
    }
}

if (!function_exists('enqueue_styles')) {
    function enqueue_styles()
    {
        wp_enqueue_style('main', THEME_DIR . '/dist/css/main.css');
    }
}

if (!function_exists('remove_head_junk')) {
    function remove_head_junk()
    {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
        remove_action('wp_head', 'parent_post_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
        remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
    }
}
