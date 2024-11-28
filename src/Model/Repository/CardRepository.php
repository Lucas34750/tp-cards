<?php

namespace Lucas\App\Model\Repository;

class CardRepository {
    // Définir le chemin du fichier de données (data.json)
    private static $filename = __DIR__ . "/../../../data/data.json";

    // Insérer une carte dans le fichier de données
    public function insert($card){
        // Récupérer toutes les cartes existantes
        $content = $this->getAll();
        
        // Ajouter la nouvelle carte à la liste
        $content[] = [
            "question" => $card->getQuestion(),
            "answer" => $card->getAnswer()
        ];
        
        // Sauvegarder les cartes mises à jour dans le fichier (data.json)
        file_put_contents(self::$filename, json_encode($content, JSON_PRETTY_PRINT));
    }

    // Récupérer toutes les cartes depuis le fichier de données
    public function getAll(){
        // Lire le contenu du fichier JSON et le décoder en tableau associatif
        return json_decode(file_get_contents(self::$filename), true);
    }
}
