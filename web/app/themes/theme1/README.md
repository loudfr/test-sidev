# Theme1 - Thème WordPress One-Page pour Trail des Callunes

## Description
Un thème WordPress moderne et entièrement personnalisé pour le site du Trail des Callunes. Design one-page avec navigation fluide, contenu géré via ACF, et animations interactives.

## Fonctionnalités Principales

### 🏃‍♂️ Design One-Page
- Navigation fluide entre les sections
- Header qui se cache/remonte selon la direction du scroll
- Défilement automatique vers les sections depuis le menu

### 🎨 Gestion de Contenu ACF
- Tous les contenus éditables via Advanced Custom Fields
- Sections modulaires : Hero, Parcours, Programme, Galerie, Contact
- Images et textes entièrement personnalisables

### ⚡ Fonctionnalités Interactives
- **AJAX Parcours** : Chargement dynamique des parcours sans rechargement de page
- **Carousel Galerie** : Navigation fluide dans les photos
- **Formulaire de Contact** : Intégration Contact Form 7
- **Animations Fluides** : Transitions CSS et JavaScript optimisées

### 📱 Responsive Design
- Design mobile-first
- Menu adaptatif
- Grilles responsives
- Typographie optimisée

## Structure des Fichiers

```
theme1/
├── header.php              # En-tête avec navigation one-page
├── footer.php              # Pied de page
├── index.php               # Page d'accueil modulaire
├── functions.php           # Fonctions du thème et enqueue scripts
├── assets/
│   ├── scss/
│   │   ├── style.scss      # Fichier SASS principal
│   │   ├── _header.scss    # Styles header + animations
│   │   ├── _index.scss     # Styles page d'accueil
│   │   └── _variables.scss # Variables SASS centralisées
│   ├── css/
│   │   └── style.css       # CSS compilé
│   └── js/
│       ├── smooth-scroll.js    # Scroll fluide + header hide/show
│       ├── parcours.js         # AJAX parcours
│       ├── galerie.js          # Carousel galerie
│       ├── countdown.js        # Compte à rebours
│       └── partenaires.js      # Animations partenaires
└── imgs/                  # Images du thème
```

## Sections de la Page d'Accueil

1. **Hero Section** - Bannière avec titre, description et CTA
2. **Countdown Section** - Compte à rebours vers l'événement
3. **Trail Section** - Présentation du trail avec image
4. **Parcours Section** - Grille des parcours (chargés en AJAX)
5. **Programme Section** - Timeline du weekend
6. **Rejoindre Aventure** - Section motivationnelle
7. **Galerie Section** - Carousel d'images
8. **Inscription Section** - Formulaire de contact

## Navigation

Le header contient un menu de navigation one-page :
- **Accueil** → `#hero-section`
- **Les Parcours** → `#parcours-section`
- **Programme** → `#programme`
- **Galerie** → `#galerie`
- **Inscription** → `#inscription` (CTA)

### Animations Header
- **Scroll vers le bas** : Header disparaît fluide vers le haut
- **Scroll vers le haut** : Header réapparaît fluide
- **Clic navigation** : Scroll fluide vers la section cible

## Dépendances

### Plugins WordPress Requis
- **Advanced Custom Fields (ACF)** - Gestion du contenu
- **Contact Form 7** - Formulaire de contact

### Librairies Front-End
- **SASS** - Préprocesseur CSS
- **Font Awesome** - Icônes
- **Google Fonts** - Typographie

## Compilation SASS

```powershell
# Compilation simple
sass assets/scss/style.scss assets/css/style.css

# Compilation avec watch (auto-compilation)
sass --watch assets/scss/style.scss:assets/css/style.css

# Compilation minifiée pour production
sass assets/scss/style.scss assets/css/style.css --style compressed
```

## Installation

1. **Prérequis** :
   - WordPress 5.0+
   - PHP 7.4+
   - Node.js/SASS pour la compilation

2. **Installation** :
   - Placez le dossier `theme1` dans `web/app/themes/`
   - Activez le thème dans l'administration WordPress
   - Installez et activez ACF et Contact Form 7

3. **Configuration ACF** :
   - Importez les groupes de champs ACF (si fournis)
   - Configurez les contenus dans l'admin WordPress

4. **Compilation** :
   - Compilez les fichiers SASS
   - Le thème est prêt !

## Personnalisation

### Variables SASS
Fichier `_variables.scss` :
```scss
$primary-color: #1A3B62;
$secondary-color: #ffffff;
// ... autres variables
```

### Contenu ACF
Tous les textes et images sont éditables via l'admin WordPress :
- Titres et descriptions
- Images de fond
- Contenus des parcours
- Galerie photos

### JavaScript
- `smooth-scroll.js` : Navigation et animations header
- `parcours.js` : Chargement AJAX des parcours
- `galerie.js` : Carousel de la galerie

## Support Technique

- **WordPress** : 5.0+
- **PHP** : 7.4+
- **Navigateurs** : Chrome, Firefox, Safari, Edge
- **Mobile** : iOS Safari, Chrome Android

## Développement

### Commandes Utiles
```bash
# Watch SASS
sass --watch assets/scss/style.scss:assets/css/style.css

# Vérifier les erreurs PHP
php -l functions.php
```

### Structure ACF (Recommandée)
- Groupe "Page d'accueil" avec sous-groupes pour chaque section
- Répéteurs pour parcours et galerie
- Champs texte/textarea pour contenus
- Champs image pour médias

---

**Trail des Callunes** - Site officiel du trail running événementiel
 