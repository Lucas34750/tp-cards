<div class="list-container">
    <h1>Liste des Cartes</h1>
    <ul>
        <?php

        foreach ($list as $card) {
            echo "<li>";
            echo "<h3>" . htmlspecialchars($card["question"]) . "</h3>";
            echo "<p class='answer'><strong>Réponse :</strong> " . htmlspecialchars($card["answer"]) . "</p>";
            echo "<button class='toggle-btn'>Afficher la réponse</button>";
            echo "</li>";
        }
        ?>
    </ul>
</div>