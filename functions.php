<?php
function cc_files() {
    wp_enqueue_style('fontawesome-style',get_template_directory_uri() . '/assets/css/all.min.css', '', '1.0.0');
    wp_enqueue_style('fonts-style',get_template_directory_uri() . '/assets/css/fonts.css', '', '1.0.0');
    wp_enqueue_style('main-styles',get_template_directory_uri() . '/assets/css/main.css', '', '1.0.5');
}

add_action('wp_enqueue_scripts', 'cc_files');

function add_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'add_mime_types');

function cc_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'cc_features');