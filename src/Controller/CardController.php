<?php

namespace Lucas\App\Controller;

use Lucas\App\Model\Card;
use Lucas\App\Model\Repository\CardRepository;
use Lucas\Kernel\AbstractController;

class CardController extends AbstractController {

    // Afficher la liste des cartes
    public function list(){
        // Créer une instance du repository pour accéder aux cartes
        $repo = new CardRepository();
        
        // Récupérer toutes les cartes
        $cardlist = $repo->getAll();
        
        // Rendre la vue "card/list" avec les données des cartes et un titre
        $this->render("card/list", ["list" => $cardlist, "title" => "Liste des Cartes"]);
    }

    // Créer une nouvelle carte
    public function create(){
        // Vérifier si la méthode est POST et si les données sont présentes
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["question"], $_POST["answer"])) {
            // Créer une nouvelle instance de Card avec les données soumises
            $card = new Card($_POST["question"], $_POST["answer"]);
            
            // Créer une instance du repository pour insérer la carte
            $repo = new CardRepository();
            $repo->insert($card);
            
            // Rediriger vers la liste des cartes après l'ajout
            $this->redirect("/");
        }

        // Rendre la vue "card/create" pour afficher le formulaire d'ajout avec un titre
        $this->render("card/create", ["title" => "Ajout de Carte"]);
    }
}
