// Compte à rebours dynamique
document.addEventListener('DOMContentLoaded', function() {
    const countdownTimer = document.querySelector('.countdown-timer');
    
    if (!countdownTimer) return;
    
    const dateString = countdownTimer.getAttribute('data-date');
    
    // Format Ymd sans séparateurs (ex: 20251231)
    const year = dateString.substring(0, 4);
    const month = dateString.substring(4, 6);
    const day = dateString.substring(6, 8);
    const targetDate = new Date(year, month - 1, day, 23, 59, 59).getTime();
    
    // Vérifier si la date est valide
    if (isNaN(targetDate)) {
        console.error('Date invalide:', dateString);
        return;
    }
    
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;
        
        // Calculs
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Mise à jour de l'affichage
        document.getElementById('days').textContent = days + 'j';
        document.getElementById('hours').textContent = hours + 'h';
        document.getElementById('minutes').textContent = minutes + 'm';
        document.getElementById('seconds').textContent = seconds + 's';
        
        // Si le compte à rebours est terminé
        if (distance < 0) {
            clearInterval(countdownInterval);
            document.getElementById('days').textContent = '0j';
            document.getElementById('hours').textContent = '0h';
            document.getElementById('minutes').textContent = '0m';
            document.getElementById('seconds').textContent = '0s';
        }
    }
    
    // Mise à jour initiale
    updateCountdown();
    
    // Mise à jour toutes les secondes
    const countdownInterval = setInterval(updateCountdown, 1000);
});
