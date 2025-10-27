<?php
/**
 * Theme functions and definitions
 */

// Enqueue styles
function theme1_enqueue_styles() {
    // Enqueue le fichier CSS compilé
    wp_enqueue_style('theme1-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'theme1_enqueue_styles');

// Support pour le titre du site
add_theme_support('title-tag');

// Support pour les images à la une
add_theme_support('post-thumbnails');
