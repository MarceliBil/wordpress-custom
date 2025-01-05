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
        echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
        echo '<script type="module" src="http://localhost:5173/src/js/main.js"></script>';
    } else {
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/main.css', array(), '1.0');
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/dist/script.js', array(), '1.0', true);
    }
}
add_action('wp_head', 'enqueue_custom_assets');

// custom client page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Client settings',
        'menu_title' => 'Client settings',
        'menu_slug' => 'client-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}


// add svg
function allow_svg_upload($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'allow_svg_upload');
