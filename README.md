
# Application de gestion de cartes

Cette application permet de gérer des cartes avec des questions et des réponses, consultables et éditables via une interface web.

## Prérequis

- **PHP** : Assurez-vous d'avoir PHP installé sur votre machine (version 7.4 ou ultérieure recommandée).
- **Composer** : Nécessaire pour gérer les dépendances de l'application.

## Installation

1. Clonez ce dépôt sur votre machine locale :
   ```bash
   git clone <url-du-repository>
   ```
2. Accédez au répertoire de l'application :
   ```bash
   cd chemin-vers-votre-projet
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
- Si vous rencontrez des erreurs, consultez le fichier `error.php` pour plus de détails.

## Aide

Pour toute question ou problème, n'hésitez pas à me contacter ou à ouvrir une issue dans ce dépôt.

---

**Bon développement !**
