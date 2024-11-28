<?php

// Définir les routes disponibles pour l'application
$routes = [
    ["request_method" => "GET", "path" => "/", "handler" => ["method" => "list", "controller" => "CardController"]],
    ["request_method" => ["GET", "POST"], "path" => "/create", "handler" => ["method" => "create", "controller" => "CardController"]],
];

// Enregistrer les routes dans une constante
define('ROUTES', $routes);

// Définir les espaces de noms pour les contrôleurs et modèles
$namespaces = [
    "controller" => "Lucas\App\Controller\\",
    "model" => "Lucas\App\Model\\",
];

// Enregistrer les espaces de noms dans une constante
define('NAMESPACES', $namespaces);
