<?php
/**
 * Theme functions and definitions
 */

// Enqueue styles
function theme1_enqueue_styles() {
    // Enqueue le fichier CSS compilé
    wp_enqueue_style('theme1-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    
    // Enqueue le fichier JavaScript du compte à rebours
    wp_enqueue_script('theme1-countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), '1.0.0', true);
    
    // Enqueue le fichier JavaScript pour les parcours AJAX
    wp_enqueue_script('theme1-parcours', get_template_directory_uri() . '/assets/js/parcours.js', array(), '1.0.0', true);
    
    // Enqueue le fichier JavaScript pour les partenaires
    wp_enqueue_script('theme1-partenaires', get_template_directory_uri() . '/assets/js/partenaires.js', array(), '1.0.0', true);
    
    // Enqueue le script de scroll fluide pour la navigation one-page
    wp_enqueue_script('theme1-smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array(), '1.0.0', true);

    // Passer l'URL du thème au JavaScript
    wp_localize_script('theme1-parcours', 'themeData', array(
        'themeUrl' => get_template_directory_uri(),
        'ajaxUrl' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'theme1_enqueue_styles');

// Handler AJAX pour récupérer les parcours
function get_parcours_ajax() {
   
    // Si aucun parcours configuré, retourner des données par défaut
    if (empty($parcours)) {
        $parcours = array(
            array(
                'title' => 'Trail des Callunes',
                'distance' => '45 km',
                'elevation' => '2500m',
                'description' => 'Parcours technique à travers les plus belles landes de callunes de la région, avec des passages techniques et des dénivelés importants.',
                'price' => '45€',
                'difficulty' => 'Difficile',
                'image' => get_template_directory_uri() . '/imgs/parcours.svg',
                'link' => '#'
            ),
            array(
                'title' => 'Trail des Callunes',
                'distance' => '25 km',
                'elevation' => '1100m',
                'description' => 'Parcours accessible aux coureurs réguliers, avec des paysages variés de landes et des passages techniques modérés.',
                'price' => '50€',
                'difficulty' => 'Difficile',
                'image' => get_template_directory_uri() . '/imgs/parcours.svg',
                'link' => '#'
            ),
            array(
                'title' => 'Trail initiation',
                'distance' => '12 km',
                'elevation' => '400m',
                'description' => 'Idéal pour découvrir le trail running, ce parcours offre une première expérience dans les landes avec des paysages magnifiques.',
                'price' => '12€',
                'difficulty' => 'Difficile',
                'image' => get_template_directory_uri() . '/imgs/parcours.svg',
                'link' => '#'
            )
        );
    }
    
    wp_send_json_success($parcours);
}
add_action('wp_ajax_get_parcours', 'get_parcours_ajax');
add_action('wp_ajax_nopriv_get_parcours', 'get_parcours_ajax');

// Support pour le titre du site
add_theme_support('title-tag');

// Support pour les images à la une
add_theme_support('post-thumbnails');
