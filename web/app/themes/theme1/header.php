<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.svg" alt="<?php bloginfo('name'); ?>" class="logo-image">
                </a>
            </div>
            
            <nav class="main-navigation">                  
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="<?php echo home_url('/'); ?>" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo home_url('/parcours'); ?>" class="nav-link">Les Parcours</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo home_url('/programme'); ?>" class="nav-link">Programme</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo home_url('/galerie'); ?>" class="nav-link">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo home_url('/inscription'); ?>" class="nav-link cta">Inscription</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
