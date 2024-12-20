<?php
// Add theme support
function custom_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'customtheme')
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');

// Enqueue styles and scripts
function custom_theme_enqueue_scripts()
{
    wp_enqueue_style('custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');

function enqueue_custom_assets()
{
    if (defined('WP_ENV') && WP_ENV === 'development') {
        wp_enqueue_style('custom-style', 'http://localhost:5173/scss/main.css', array(), null);
        wp_enqueue_script('custom-script', 'http://localhost:5173/js/script.js', array(), null, true);
    } else {
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/main.css', array(), '1.0');
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/dist/script.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_assets');
