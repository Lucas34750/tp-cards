<?php

// Charger l'autoload de Composer pour inclure automatiquement les dépendances
include_once "./../vendor/autoload.php";

// Importer la classe Router du namespace Lucas\Kernel
use Lucas\Kernel\Router;

try {
    // Appeler la méthode routing() de la classe Router pour gérer le routage
    Router::routing();
}
catch(Exception $e) {
    // Si une exception est lancée (par exemple, route non trouvée), afficher une page d'erreur
    require_once "./../views/errors/error.php";
}
