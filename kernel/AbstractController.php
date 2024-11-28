<?php

namespace Lucas\Kernel;

class AbstractController {

    // Rendre la vue avec les arguments passés
    public function render($view, $args = []) {
        extract($args);  // Convertir les éléments du tableau $args en variables
        require_once "./../views/base.php";  // Inclure le fichier de vue
    }

    // Rediriger vers une autre URL
    public function redirect($path) {
        header("Location: $path");  // Envoyer la redirection HTTP
        exit;  // Terminer l'exécution du script après la redirection
    }
}
