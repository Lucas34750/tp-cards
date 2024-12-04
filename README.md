
# Application de gestion de cartes

Cette application permet de gérer des cartes avec des questions et des réponses, consultables et éditables via une interface web.

## Prérequis

- **PHP** : Assurez-vous d'avoir PHP installé sur votre machine (version 7.4 ou ultérieure recommandée).
- https://www.php.net/manual/fr/install.php
- **Composer** : Nécessaire pour gérer les dépendances de l'application.
- https://getcomposer.org/download/

## Installation

1. Clonez ce dépôt sur votre machine locale :
   ```bash
   git clone https://github.com/Lucas34750/tp-cards.git
   ```
2. Accédez au répertoire de l'application :
   ```bash
   cd tp-Card
   ```
3. Installez les dépendances avec Composer :
   ```bash
   composer install
   ```

## Démarrage de l'application

1. Accédez au répertoire `public` :
   ```bash
   cd public
   ```
2. Lancez un serveur PHP local :
   ```bash
   php -S localhost:8000
   ```
3. Ouvrez votre navigateur et accédez à [http://localhost:8000](http://localhost:8000).

## Fonctionnalités

- **Lister les cartes** : Affiche une liste des questions et réponses.
- **Ajouter une carte** : Permet de créer de nouvelles cartes via un formulaire.
- **Afficher/Masquer les réponses** : Interaction dynamique avec les cartes.

## Structure des fichiers

- **`/public`** : Contient les fichiers accessibles publiquement, y compris l'entrée principale de l'application.
- **`/views`** : Contient les fichiers de vue pour rendre les pages HTML.
- **`/src`** : Contient les fichiers principaux de l'application (contrôleurs, modèles, etc.).
- **`/data`** : Contient le fichier `data.json`, où les cartes sont stockées.

## Notes

- Assurez-vous que le fichier `data/data.json` est accessible en écriture pour que l'ajout de cartes fonctionne correctement.
