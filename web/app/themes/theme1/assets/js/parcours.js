// Chargement AJAX des parcours
document.addEventListener('DOMContentLoaded', function() {
    const parcoursContainer = document.querySelector('.parcours-cards');
    
    if (!parcoursContainer) return;
    
    // Afficher un loader pendant le chargement
    parcoursContainer.innerHTML = `
        <div class="parcours-loader">
            <div class="spinner"></div>
            <p>Chargement des parcours...</p>
        </div>
    `;
    
    // Simuler un chargement AJAX (remplacer par une vraie requête AJAX plus tard)
    setTimeout(() => {
        loadParcours();
    }, 1000);
    
    function loadParcours() {
        // URL pour la requête AJAX WordPress
        const ajaxUrl = themeData.ajaxUrl || '/wp-admin/admin-ajax.php';
        
        fetch(ajaxUrl + '?action=get_parcours')
            .then(response => {
                if (!response.ok) {
                    throw new Error('HTTP error ' + response.status);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    displayParcours(data.data);
                } else {
                    // Si l'AJAX échoue, afficher les parcours statiques
                    displayDefaultParcours();
                }
            })
            .catch(error => {
                console.error('Erreur de chargement:', error);
                // En cas d'erreur, afficher les parcours par défaut
                displayDefaultParcours();
            });
    }
    
    function displayParcours(parcours) {
        let html = '';
        
        parcours.forEach(p => {
            html += `
                <div class="parcours-card">
                    <div class="card-image">
                        <img src="${p.image}" alt="${p.title}">
                        <span class="badge">${p.difficulty}</span>
                    </div>
                    <div class="card-body">
                        <h3>${p.title}</h3>
                        <p class="distance">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M12 25.3334C12 27.5426 10.2091 29.3334 8 29.3334C5.79086 29.3334 4 27.5426 4 25.3334C4 23.1243 5.79086 21.3334 8 21.3334C10.2091 21.3334 12 23.1243 12 25.3334ZM12 25.3334H23.3333C24.571 25.3334 25.758 24.8417 26.6332 23.9666C27.5083 23.0914 28 21.9044 28 20.6667C28 19.4291 27.5083 18.2421 26.6332 17.3669C25.758 16.4917 24.571 16.0001 23.3333 16.0001H8.66667C7.42899 16.0001 6.24201 15.5084 5.36684 14.6332C4.49167 13.7581 4 12.5711 4 11.3334C4 10.0957 4.49167 8.90875 5.36684 8.03358C6.24201 7.15841 7.42899 6.66675 8.66667 6.66675H20M20 6.66675C20 8.87589 21.7909 10.6667 24 10.6667C26.2091 10.6667 28 8.87589 28 6.66675C28 4.45761 26.2091 2.66675 24 2.66675C21.7909 2.66675 20 4.45761 20 6.66675Z" stroke="#1A3B62" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            ${p.distance} - D+ ${p.elevation}
                        </p>
                        <p class="description">${p.description}</p>
                        <div class="card-footer">
                            <span class="price">${p.price}</span>
                            <a href="${p.link}" class="cta">S'inscrire</a>
                        </div>
                    </div>
                </div>
            `;
        });
        
        parcoursContainer.innerHTML = html;
    }
    
    function displayDefaultParcours() {
        const themeUrl = themeData.themeUrl || '';
        const defaultParcours = [
            {
                title: 'Trail des Callunes',
                distance: '45 km',
                elevation: '2500m',
                description: 'Parcours technique à travers les plus belles landes de callunes de la région, avec des passages techniques et des dénivelés importants.',
                price: '45€',
                difficulty: 'Difficile',
                image: themeUrl + '/imgs/parcours.svg',
                link: '#'
            },
            {
                title: 'Trail des Callunes',
                distance: '25 km',
                elevation: '1100m',
                description: 'Parcours accessible aux coureurs réguliers, avec des paysages variés de landes et des passages techniques modérés.',
                price: '50€',
                difficulty: 'Difficile',
                image: themeUrl + '/imgs/parcours.svg',
                link: '#'
            },
            {
                title: 'Trail initiation',
                distance: '12 km',
                elevation: '400m',
                description: 'Idéal pour découvrir le trail running, ce parcours offre une première expérience dans les landes avec des paysages magnifiques.',
                price: '12€',
                difficulty: 'Difficile',
                image: themeUrl + '/imgs/parcours.svg',
                link: '#'
            }
        ];
        
        displayParcours(defaultParcours);
    }
});
