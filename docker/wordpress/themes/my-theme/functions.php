<?php
add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'child_enqueue_styles');
add_action('wp_enqueue_scripts', 'child_enqueue_custom_js');

function child_enqueue_styles()
{
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/assets/css/styles.css', array());
}

function child_enqueue_custom_js()
{
  wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/scripts/custom.js');
}
