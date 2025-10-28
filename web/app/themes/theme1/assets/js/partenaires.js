document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.partenaires-track');
    
    if (!track) return;
    
    let scrollSpeed = 1; // Vitesse normale (pixels par frame)
    let currentSpeed = scrollSpeed;
    let currentPosition = 0;
    let isSlowedDown = false;
    let animationFrame;
    
    // Fonction d'animation du défilement
    function animate() {
        currentPosition -= currentSpeed;
        
        // Calculer la largeur totale d'un ensemble de logos (la moitié puisqu'on les duplique)
        const trackWidth = track.scrollWidth / 2;
        
        // Réinitialiser la position pour créer une boucle infinie
        if (Math.abs(currentPosition) >= trackWidth) {
            currentPosition = 0;
        }
        
        track.style.transform = `translateX(${currentPosition}px)`;
        
        animationFrame = requestAnimationFrame(animate);
    }
    
    // Démarrer l'animation
    animate();
    
    // Ralentir au survol de chaque logo
    const items = document.querySelectorAll('.partenaire-item');
    
    items.forEach(item => {
        item.addEventListener('mouseenter', () => {
            isSlowedDown = true;
            currentSpeed = scrollSpeed * 0.2; // Ralentir à 20% de la vitesse normale
        });
        
        item.addEventListener('mouseleave', () => {
            isSlowedDown = false;
            currentSpeed = scrollSpeed; // Revenir à la vitesse normale
        });
    });
    
    // Nettoyer l'animation lors du déchargement de la page
    window.addEventListener('beforeunload', () => {
        if (animationFrame) {
            cancelAnimationFrame(animationFrame);
        }
    });
});
