<?php get_header(); ?>

<main class="home-page">
    <section class="hero-section" id="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"><?= get_field('hero_titre') ?></h1>
                <p class="hero-description"><?= get_field('hero_description') ?></p>
                <a href="<?php echo home_url('#'); ?>" class="btn btn-primary">S'inscrire maintenant</a>
                <a href="<?php echo home_url('#'); ?>" class="btn btn-secondary">Découvrir les parcours</a>
            </div>
        </div>
    </section>

    <section class="countdown-section">
        <div class="countdown-container">
            <p class="countdown-label">Prochaine édition dans :</p>
            <div class="countdown-timer" data-date="<?= get_field('date_edition') ? get_field('date_edition') : '2025-12-31' ?>">
                <div class="countdown-item">
                    <span class="countdown-value" id="days">0j</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-value" id="hours">0h</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-value" id="minutes">0m</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-value" id="seconds">0s</span>
                </div>
            </div>
        </div>
    </section>

    <section class="trail-section">
        <div class="trail-content">
            <div class="trail-text">
                <h2><?= get_field('trail_titre') ?></h2>
                <p><?= get_field('trail_description') ?></p>

                <div class="trail-icons">
                    <div class="icon-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M14.42 30L5.32 14.28C4.92761 13.6017 4.74306 12.8232 4.78928 12.041C4.83551 11.2587 5.11046 10.5073 5.58 9.88L8.8 5.6C9.17259 5.10322 9.65573 4.7 10.2111 4.42229C10.7666 4.14458 11.379 4 12 4H36C36.621 4 37.2334 4.14458 37.7889 4.42229C38.3443 4.7 38.8274 5.10322 39.2 5.6L42.4 9.88C42.8727 10.5053 43.1512 11.2557 43.2009 12.0379C43.2507 12.8202 43.0696 13.5998 42.68 14.28L33.58 30M22 24L10.24 4.4M26 24L37.76 4.4M16 14H32M24 36V32H23M34 34C34 39.5228 29.5229 44 24 44C18.4772 44 14 39.5228 14 34C14 28.4772 18.4772 24 24 24C29.5229 24 34 28.4772 34 34Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Certifié FFA</span>
                    </div>
                    <div class="icon-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M4 42C4 36 7.7 31.28 14.16 30C19 29.04 24 26 26 24M22 40C18.4881 40.0106 15.1005 38.701 12.509 36.3308C9.91756 33.9607 8.31153 30.7031 8.00947 27.2042C7.70741 23.7053 8.73138 20.2207 10.8783 17.4415C13.0252 14.6622 16.1383 12.7914 19.6 12.2C31 10 34 8.96 38 4C40 8 42 12.36 42 20C42 31 32.44 40 22 40Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Éco-responsable</span>
                    </div>
                    <div class="icon-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                            <path d="M36 42C36 37.7565 34.3143 33.6869 31.3137 30.6863C28.3131 27.6857 24.2435 26 20 26M20 26C15.7565 26 11.6869 27.6857 8.68629 30.6863C5.68571 33.6869 4 37.7565 4 42M20 26C25.5228 26 30 21.5228 30 16C30 10.4772 25.5228 6 20 6C14.4772 6 10 10.4772 10 16C10 21.5228 14.4772 26 20 26ZM44 40C44 33.26 40 27 36 24C37.3148 23.0135 38.3662 21.7182 39.0611 20.2285C39.756 18.7389 40.073 17.1009 39.984 15.4596C39.895 13.8183 39.4028 12.2242 38.5509 10.8184C37.6991 9.41263 36.5138 8.23852 35.1 7.4" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Communauté active</span>
                    </div>
                </div>
            </div>

            <div class="trail-image">
                <img src="<?= get_field('trail_image') ?>" alt="Trail image">
            </div>
        </div>
    </section>

    <section class="parcours-section" id="parcours-section">
        <div class="container">
            <h2>Nos Parcours</h2>
            <p class="subtitle">
                Choisissez le défi qui vous correspond parmi nos différents parcours à travers les landes de callunes.
            </p>

            <div class="parcours-cards">

            <!-- Carte 1 -->
            <div class="parcours-card">

                <div class="card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/parcours.svg" alt="Trail des Callunes 45 km">
                    <span class="badge">Difficile</span>
                </div>

                <div class="card-body">
                    <h3>Trail des Callunes</h3>
                    <p class="distance">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M12 25.3334C12 27.5426 10.2091 29.3334 8 29.3334C5.79086 29.3334 4 27.5426 4 25.3334C4 23.1243 5.79086 21.3334 8 21.3334C10.2091 21.3334 12 23.1243 12 25.3334ZM12 25.3334H23.3333C24.571 25.3334 25.758 24.8417 26.6332 23.9666C27.5083 23.0914 28 21.9044 28 20.6667C28 19.4291 27.5083 18.2421 26.6332 17.3669C25.758 16.4917 24.571 16.0001 23.3333 16.0001H8.66667C7.42899 16.0001 6.24201 15.5084 5.36684 14.6332C4.49167 13.7581 4 12.5711 4 11.3334C4 10.0957 4.49167 8.90875 5.36684 8.03358C6.24201 7.15841 7.42899 6.66675 8.66667 6.66675H20M20 6.66675C20 8.87589 21.7909 10.6667 24 10.6667C26.2091 10.6667 28 8.87589 28 6.66675C28 4.45761 26.2091 2.66675 24 2.66675C21.7909 2.66675 20 4.45761 20 6.66675Z" stroke="#1A3B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        45 km - D+ 2500m</p>
                    <p class="description">
                        Parcours technique à travers les plus belles landes de callunes de la région,
                        avec des passages techniques et des dénivelés importants.
                    </p>
                    <div class="card-footer">
                        <span class="price">45€</span>
                        <a href="#" class="cta">S'inscrire <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="parcours-card">
                <div class="card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/parcours.svg" alt="Trail des Callunes 25 km">
                    <span class="badge">Difficile</span>
                </div>

                <div class="card-body">
                    <h3>Trail des Callunes</h3>
                    <p class="distance">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M12 25.3334C12 27.5426 10.2091 29.3334 8 29.3334C5.79086 29.3334 4 27.5426 4 25.3334C4 23.1243 5.79086 21.3334 8 21.3334C10.2091 21.3334 12 23.1243 12 25.3334ZM12 25.3334H23.3333C24.571 25.3334 25.758 24.8417 26.6332 23.9666C27.5083 23.0914 28 21.9044 28 20.6667C28 19.4291 27.5083 18.2421 26.6332 17.3669C25.758 16.4917 24.571 16.0001 23.3333 16.0001H8.66667C7.42899 16.0001 6.24201 15.5084 5.36684 14.6332C4.49167 13.7581 4 12.5711 4 11.3334C4 10.0957 4.49167 8.90875 5.36684 8.03358C6.24201 7.15841 7.42899 6.66675 8.66667 6.66675H20M20 6.66675C20 8.87589 21.7909 10.6667 24 10.6667C26.2091 10.6667 28 8.87589 28 6.66675C28 4.45761 26.2091 2.66675 24 2.66675C21.7909 2.66675 20 4.45761 20 6.66675Z" stroke="#1A3B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        25 km - D+ 1100m</p>
                    <p class="description">
                        Parcours accessible aux coureurs réguliers, avec des paysages variés de landes et des passages techniques modérés.
                    </p>
                    <div class="card-footer">
                        <span class="price">50€</span>
                        <a href="#" class="cta">S'inscrire <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="parcours-card">

                <div class="card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/parcours.svg" alt="Trail initiation 12 km">
                    <span class="badge">Difficile</span>
                </div>

                <div class="card-body">
                    <h3>Trail initiation</h3>
                    <p class="distance">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <path d="M12 25.3334C12 27.5426 10.2091 29.3334 8 29.3334C5.79086 29.3334 4 27.5426 4 25.3334C4 23.1243 5.79086 21.3334 8 21.3334C10.2091 21.3334 12 23.1243 12 25.3334ZM12 25.3334H23.3333C24.571 25.3334 25.758 24.8417 26.6332 23.9666C27.5083 23.0914 28 21.9044 28 20.6667C28 19.4291 27.5083 18.2421 26.6332 17.3669C25.758 16.4917 24.571 16.0001 23.3333 16.0001H8.66667C7.42899 16.0001 6.24201 15.5084 5.36684 14.6332C4.49167 13.7581 4 12.5711 4 11.3334C4 10.0957 4.49167 8.90875 5.36684 8.03358C6.24201 7.15841 7.42899 6.66675 8.66667 6.66675H20M20 6.66675C20 8.87589 21.7909 10.6667 24 10.6667C26.2091 10.6667 28 8.87589 28 6.66675C28 4.45761 26.2091 2.66675 24 2.66675C21.7909 2.66675 20 4.45761 20 6.66675Z" stroke="#1A3B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        12 km - D+ 400m</p>
                    <p class="description">
                        Idéal pour découvrir le trail running, ce parcours offre une première expérience dans les landes avec des paysages magnifiques.
                    </p>
                    <div class="card-footer">
                        <span class="price">12€</span>
                        <a href="#" class="cta">S'inscrire <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>

    <section class="programme-section" id="programme">
        <div class="container">
            <h2>Programme du Weekend</h2>
            <p class="subtitle">Découvrez le déroulement du weekend Trail des Callunes.</p>

            <!-- JOUR 1 -->
            <div class="jour">
                <div class="jour-header">
                    <span class="jour-num">1</span>
                    <h3>Samedi 23 septembre</h3>
                </div>

                <div class="timeline">
                    <div class="event">
                        <div class="event-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_20_173)">
                                    <path d="M10 6.66675L15 4.16675L10 1.66675V10.0001M6.66666 9.99175L2.08333 12.6084C1.95508 12.6811 1.84841 12.7865 1.77419 12.9139C1.69998 13.0412 1.66087 13.186 1.66087 13.3334C1.66087 13.4808 1.69998 13.6256 1.77419 13.753C1.84841 13.8803 1.95508 13.9857 2.08333 14.0584L9.16666 18.1084C9.42003 18.2547 9.70744 18.3317 10 18.3317C10.2926 18.3317 10.58 18.2547 10.8333 18.1084L17.9167 14.0584C18.0449 13.9857 18.1516 13.8803 18.2258 13.753C18.3 13.6256 18.3391 13.4808 18.3391 13.3334C18.3391 13.186 18.3 13.0412 18.2258 12.9139C18.1516 12.7865 18.0449 12.6811 17.9167 12.6084L13.3333 10.0001M5.40833 10.7084L14.5917 15.9584M14.5917 10.7084L5.41666 15.9584" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_20_173">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="event-content">
                            <h4>Accueil des participants</h4>
                            <span class="horaire">07h00 - 08h30</span>
                            <p>Retrait des dossards et vérification des équipements obligatoires.</p>
                        </div>
                    </div>

                    <div class="event">
                        <div class="event-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M3.33334 12.5001C3.33334 12.5001 4.16667 11.6667 6.66667 11.6667C9.16667 11.6667 10.8333 13.3334 13.3333 13.3334C15.8333 13.3334 16.6667 12.5001 16.6667 12.5001V2.50008C16.6667 2.50008 15.8333 3.33341 13.3333 3.33341C10.8333 3.33341 9.16667 1.66675 6.66667 1.66675C4.16667 1.66675 3.33334 2.50008 3.33334 2.50008V12.5001ZM3.33334 12.5001V18.3334" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="event-content">
                            <h4>Départ Trail des Callunes</h4>
                            <span class="horaire">08h30</span>
                            <p>Départ du parcours de 45km à travers les landes.</p>
                        </div>
                    </div>

                    <div class="event">
                        <div class="event-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M2.5 1.6665V7.49984C2.5 8.4165 3.25 9.1665 4.16667 9.1665H7.5C7.94203 9.1665 8.36595 8.99091 8.67851 8.67835C8.99107 8.36579 9.16667 7.94186 9.16667 7.49984V1.6665M5.83333 1.6665V18.3332M17.5 12.4998V1.6665C16.3949 1.6665 15.3351 2.10549 14.5537 2.88689C13.7723 3.66829 13.3333 4.7281 13.3333 5.83317V10.8332C13.3333 11.7498 14.0833 12.4998 15 12.4998H17.5ZM17.5 12.4998V18.3332" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="event-content">
                            <h4>Repas des coureurs</h4>
                            <span class="horaire">12h00 - 16h00</span>
                            <p>Repas offert à tous les participants à leur arrivée.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- JOUR 2 -->
            <div class="jour">
                <div class="jour-header">
                    <span class="jour-num">2</span>
                    <h3>Dimanche 24 septembre</h3>
                </div>

                <div class="timeline">
                    <div class="event">
                        <div class="event-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <g clip-path="url(#clip0_20_173_2)">
                                    <path d="M10 6.66675L15 4.16675L10 1.66675V10.0001M6.66666 9.99175L2.08333 12.6084C1.95508 12.6811 1.84841 12.7865 1.77419 12.9139C1.69998 13.0412 1.66087 13.186 1.66087 13.3334C1.66087 13.4808 1.69998 13.6256 1.77419 13.753C1.84841 13.8803 1.95508 13.9857 2.08333 14.0584L9.16666 18.1084C9.42003 18.2547 9.70744 18.3317 10 18.3317C10.2926 18.3317 10.58 18.2547 10.8333 18.1084L17.9167 14.0584C18.0449 13.9857 18.1516 13.8803 18.2258 13.753C18.3 13.6256 18.3391 13.4808 18.3391 13.3334C18.3391 13.186 18.3 13.0412 18.2258 12.9139C18.1516 12.7865 18.0449 12.6811 17.9167 12.6084L13.3333 10.0001M5.40833 10.7084L14.5917 15.9584M14.5917 10.7084L5.41666 15.9584" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_20_173_2">
                                        <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="event-content">
                            <h4>Accueil des participants</h4>
                            <span class="horaire">08h00 - 09h00</span>
                            <p>Retrait des dossards pour le Trail Initiation.</p>
                        </div>
                    </div>

                    <div class="event">
                        <div class="event-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M3.33334 12.5001C3.33334 12.5001 4.16667 11.6667 6.66667 11.6667C9.16667 11.6667 10.8333 13.3334 13.3333 13.3334C15.8333 13.3334 16.6667 12.5001 16.6667 12.5001V2.50008C16.6667 2.50008 15.8333 3.33341 13.3333 3.33341C10.8333 3.33341 9.16667 1.66675 6.66667 1.66675C4.16667 1.66675 3.33334 2.50008 3.33334 2.50008V12.5001ZM3.33334 12.5001V18.3334" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="event-content">
                            <h4>Départ Trail Initiation</h4>
                            <span class="horaire">09h30</span>
                            <p>Départ du parcours de 12km.</p>
                        </div>
                    </div>

                    <div class="event">
                        <div class="event-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M2.5 1.6665V7.49984C2.5 8.4165 3.25 9.1665 4.16667 9.1665H7.5C7.94203 9.1665 8.36595 8.99091 8.67851 8.67835C8.99107 8.36579 9.16667 7.94186 9.16667 7.49984V1.6665M5.83333 1.6665V18.3332M17.5 12.4998V1.6665C16.3949 1.6665 15.3351 2.10549 14.5537 2.88689C13.7723 3.66829 13.3333 4.7281 13.3333 5.83317V10.8332C13.3333 11.7498 14.0833 12.4998 15 12.4998H17.5ZM17.5 12.4998V18.3332" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="event-content">
                            <h4>Remise des prix</h4>
                            <span class="horaire">11h30</span>
                            <p>Cérémonie de remise des prix pour tous les parcours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rejoindre-aventure">
        <div class="container">
            <div class="aventure-content">
                <h1 class="aventure-title">Rejoindre l'aventure</h1>
                <p class="aventure-description">Plus de 1200 coureurs nous font confiance chaque année pour vivre une expérience trail inoubliable à travers les landes de callunes.</p>
                <a href="<?php echo home_url('#'); ?>" class="btn btn-primary">Je m'inscris maintenant</a>
            </div>
        </div>
    </section>


        
    <section class="galerie-section" id="galerie">
        <div class="container">
            <h2><?= get_field('galerie_titre') ?></h2>
            <p class="subtitle"><?= get_field('galerie_description') ?></p>

            <div class="galerie-grid">
                <?php 
                $galerie = get_field('galerie');
                
                if ($galerie && is_array($galerie)):
                    for ($i = 1; $i <= 8; $i++): 
                        $img_key = 'img' . $i;
                        
                        if (isset($galerie[$img_key]) && !empty($galerie[$img_key])): 
                            $image = $galerie[$img_key];
                            
                            // L'image est une URL (string)
                            if (is_string($image)):
                ?>
                                <div class="galerie-item">
                                    <img src="<?= esc_url($image) ?>" alt="Photo Trail des Callunes <?= $i ?>">
                                </div>
                <?php 
                            endif;
                        endif;
                    endfor;
                endif;
                ?>
            </div>

            <div class="galerie-cta">
                <a href="<?php echo home_url('/galerie'); ?>" class="btn-galerie">
                    Voir plus de photos
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="inscription-section" id="inscription">
        <div class="inscription-container">
            <div class="inscription-left">
                <h1>Inscription</h1>
                
                <p class="inscription-description">
                    Réservez dès maintenant votre place pour l'édition 2023 du Trail des Callunes. Les places sont limitées pour chaque parcours.
                </p>
                
                <div class="inscription-notice">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M12 16V12M12 8H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="notice-text">
                        <strong>Important:</strong> Un certificat médical de non contre-indication à la pratique du trail en compétition est obligatoire pour participer.
                    </div>
                </div>
                
                <ul class="inscription-features">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21.801 9.99999C22.2577 12.2413 21.9322 14.5714 20.8789 16.6018C19.8255 18.6322 18.1079 20.24 16.0125 21.1573C13.9171 22.0746 11.5706 22.2458 9.36431 21.6424C7.15798 21.0389 5.2252 19.6974 3.88828 17.8414C2.55137 15.9854 1.89113 13.7272 2.01767 11.4434C2.14421 9.15952 3.04989 6.98808 4.58366 5.29116C6.11743 3.59424 8.18659 2.47442 10.4461 2.11844C12.7056 1.76247 15.0188 2.19185 17 3.33499M9.00001 11L12 14L22 3.99999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Inscription en ligne sécurisée</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21.801 9.99999C22.2577 12.2413 21.9322 14.5714 20.8789 16.6018C19.8255 18.6322 18.1079 20.24 16.0125 21.1573C13.9171 22.0746 11.5706 22.2458 9.36431 21.6424C7.15798 21.0389 5.2252 19.6974 3.88828 17.8414C2.55137 15.9854 1.89113 13.7272 2.01767 11.4434C2.14421 9.15952 3.04989 6.98808 4.58366 5.29116C6.11743 3.59424 8.18659 2.47442 10.4461 2.11844C12.7056 1.76247 15.0188 2.19185 17 3.33499M9.00001 11L12 14L22 3.99999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Confirmation immédiate par email</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21.801 9.99999C22.2577 12.2413 21.9322 14.5714 20.8789 16.6018C19.8255 18.6322 18.1079 20.24 16.0125 21.1573C13.9171 22.0746 11.5706 22.2458 9.36431 21.6424C7.15798 21.0389 5.2252 19.6974 3.88828 17.8414C2.55137 15.9854 1.89113 13.7272 2.01767 11.4434C2.14421 9.15952 3.04989 6.98808 4.58366 5.29116C6.11743 3.59424 8.18659 2.47442 10.4461 2.11844C12.7056 1.76247 15.0188 2.19185 17 3.33499M9.00001 11L12 14L22 3.99999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Dossard et goodies offerts</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21.801 9.99999C22.2577 12.2413 21.9322 14.5714 20.8789 16.6018C19.8255 18.6322 18.1079 20.24 16.0125 21.1573C13.9171 22.0746 11.5706 22.2458 9.36431 21.6424C7.15798 21.0389 5.2252 19.6974 3.88828 17.8414C2.55137 15.9854 1.89113 13.7272 2.01767 11.4434C2.14421 9.15952 3.04989 6.98808 4.58366 5.29116C6.11743 3.59424 8.18659 2.47442 10.4461 2.11844C12.7056 1.76247 15.0188 2.19185 17 3.33499M9.00001 11L12 14L22 3.99999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Repas des coureurs inclus</span>
                    </li>
                </ul>
            </div>
            
            <div class="inscription-right">
                <?php echo do_shortcode('[contact-form-7 id="2a2993e" title="Formulaire de contact 1"]'); ?>
            </div>
        </div>
    </section>

    <section class="partenaires-section">
        <h2><?= get_field('partenaires_titre') ?: 'Nos Partenaires' ?></h2>
        
        <div class="partenaires-carousel">
            <div class="partenaires-track">
                <?php 
                $partenaires = get_field('partenaires');
                
                if ($partenaires && is_array($partenaires)):
                    // Dupliquer les logos pour un défilement infini
                    for ($loop = 0; $loop < 2; $loop++):
                        for ($i = 1; $i <= 10; $i++): 
                            $logo_key = 'logo' . $i;
                            
                            if (isset($partenaires[$logo_key]) && !empty($partenaires[$logo_key])): 
                                $logo = $partenaires[$logo_key];
                                
                                if (is_string($logo)):
                ?>
                                    <div class="partenaire-item">
                                        <img src="<?= esc_url($logo) ?>" alt="Partenaire <?= $i ?>">
                                    </div>
                <?php 
                                endif;
                            endif;
                        endfor;
                    endfor;
                endif;
                ?>
            </div>
        </div>
    </section>
   
</main>

<?php get_footer(); ?>