# Theme1 - WordPress Theme

## Description
Un thème WordPress personnalisé avec une page d'accueil moderne et un header avec navigation.

## Structure des fichiers

```
theme1/
├── header.php              # En-tête du site avec navigation
├── footer.php              # Pied de page
├── index.php               # Page d'accueil
├── functions.php           # Fonctions du thème
└── assets/
    ├── scss/
    │   ├── style.scss      # Fichier SASS principal
    │   ├── _header.scss    # Styles du header
    │   └── _index.scss     # Styles de la page d'accueil
    └── css/
        └── style.css       # CSS compilé
```

## Fonctionnalités

### Navigation
Le header contient un menu de navigation avec les liens suivants :
- **Accueil** - Page principale
- **Les Parcours** - Section parcours
- **Programme** - Section programme
- **Galerie** - Galerie d'images
- **Inscription** - Bouton CTA pour s'inscrire

### Page d'accueil
La page d'accueil comprend :
1. **Section Hero** - Bannière d'accueil avec titre et bouton CTA
2. **Section Features** - Grille de 3 cartes présentant les services
3. **Section CTA** - Appel à l'action final

### Responsive Design
Le thème est entièrement responsive avec :
- Menu burger pour mobile (≤768px)
- Grilles adaptatives
- Typographie responsive

## Compilation SASS

Pour compiler les fichiers SASS en CSS :

```powershell
# Compilation simple
sass assets/scss/style.scss assets/css/style.css

# Compilation avec watch (auto-compilation)
sass --watch assets/scss/style.scss:assets/css/style.css

# Compilation minifiée pour production
sass assets/scss/style.scss assets/css/style.css --style compressed
```

## Installation

1. Placez le dossier `theme1` dans `web/app/themes/`
2. Compilez les fichiers SASS
3. Activez le thème dans l'administration WordPress
4. Le thème est prêt à l'emploi !

## Personnalisation

### Couleurs
Les variables de couleur se trouvent dans les fichiers SASS :
- `_header.scss` : Couleurs du header
- `_index.scss` : Couleurs de la page d'accueil

### Menu de navigation
Pour modifier les liens du menu, éditez `header.php`

## Support
- WordPress 5.0+
- PHP 7.4+
- SASS pour la compilation des styles
