<?php

namespace Lucas\Kernel;

class Router
{
    // Fonction statique pour gérer le routage des requêtes HTTP
    public static function routing()
    {
        include 'config.php';  // Inclure la configuration des routes et des espaces de noms

        $request_url = $_SERVER["REQUEST_URI"];  // URL demandée par le client
        $request_length = strlen($request_url);  // Longueur de l'URL demandée

        $route_found = false;  // Variable pour indiquer si la route a été trouvée

        // Parcourir toutes les routes définies
        foreach (ROUTES as $route) {
            $path = $route["path"];  // Chemin de la route
            $request_method = $route["request_method"];  // Méthode HTTP attendue
            $request_method_match = false;  // Variable pour vérifier si la méthode HTTP correspond

            // Vérifier si la méthode HTTP correspond à la route
            if (is_array($request_method)) {
                if (in_array($_SERVER["REQUEST_METHOD"], $request_method)) {
                    $request_method_match = true;
                }
            } else {
                if ($request_method === $_SERVER["REQUEST_METHOD"]) {
                    $request_method_match = true;
                }
            }

            // Si la méthode HTTP correspond
            if ($request_method_match) {
                // Traiter les URL GET (supprimer les paramètres après '?')
                if ($request_method === "GET") {
                    $request_url = explode("?", $request_url)[0];
                }

                // Supprimer un slash final de l'URL (si présent)
                if ($request_length > 1 && $request_url[$request_length - 1] === '/') {
                    $request_url = substr($request_url, 0, $request_length - 1);
                }

                // Vérifier si le chemin de la route correspond à l'URL demandée
                if ($path === $request_url) {
                    $route_found = true;  // Route trouvée
                    $methodName = $route["handler"]["method"];  // Méthode du contrôleur à appeler
                    $controllerName = NAMESPACES["controller"] . $route["handler"]["controller"];  // Nom du contrôleur
                }
            }
        }

        // Si une route a été trouvée
        if ($route_found) {
            // Vérifier si le contrôleur existe
            if (class_exists($controllerName)) {
                $controller = new $controllerName();  // Instancier le contrôleur

                // Vérifier si la méthode existe dans le contrôleur
                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();  // Appeler la méthode
                } else {
                    // Si la méthode n'existe pas, lancer une exception
                    throw new \Exception("method '$methodName' undefined in controller: $controllerName");
                }
            } else {
                // Si le contrôleur n'existe pas, lancer une exception
                throw new \Exception("controller '$controllerName' doesn't exist");
            }
        } else {
            // Si aucune route n'est trouvée, lancer une exception
            throw new \Exception("404 Route not Found");
        }
    }
}
