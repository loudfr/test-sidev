<?php get_header(); ?>

<main class="home-page">
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Trail des Callunes 2026</h1>
                <p class="hero-description">Course nature à travers les landes de callunes</p>
                <a href="<?php echo home_url('/inscription'); ?>" class="btn btn-primary">S'inscrire maintenant</a>
                <a href="<?php echo home_url('/parcours'); ?>" class="btn btn-secondary">Découvrir les parcours</a>
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Nos Services</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3>Les Parcours</h3>
                    <p>Des parcours adaptés à tous les niveaux pour progresser à votre rythme.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📅</div>
                    <h3>Programme</h3>
                    <p>Un programme complet et structuré pour atteindre vos objectifs.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🖼️</div>
                    <h3>Galerie</h3>
                    <p>Découvrez nos réalisations et les moments forts de nos activités.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Prêt à commencer ?</h2>
                <p>Rejoignez-nous dès aujourd'hui et profitez d'une expérience inoubliable.</p>
                <a href="<?php echo home_url('/inscription'); ?>" class="btn btn-secondary">Inscrivez-vous</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>