<?php
function mycaribbeanchick_files() {
    wp_enqueue_style('fonts-style',get_template_directory_uri() . '/assets/css/fonts.css', '', '1.0.0');
    wp_enqueue_style('main-styles',get_template_directory_uri() . '/assets/css/main.css', null, '1.0.0');
}

add_action('wp_enqueue_scripts', 'mycaribbeanchick_files');