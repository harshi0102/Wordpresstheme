<?php
function my_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-responsive-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

function my_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());
    // Enqueue a responsive stylesheet if needed
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css');
    // Enqueue JavaScript files
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
