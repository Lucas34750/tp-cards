<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>
        <?php if(isset($title)) echo $title;  ?>
        </title>  <!-- Titre de la page, dynamiquement défini avec la variable $title -->
    <link rel="stylesheet" href="/assets/styles/css/main.css">  <!-- Lien vers la feuille de style CSS -->
    <script src="/assets/js/main.js" defer></script>  <!-- Lien vers le fichier JavaScript, avec l'attribut defer pour le charger après le HTML -->
</head>
<body>

<?php include_once __DIR__."/_partials/header.php"; ?>  <!-- Inclusion du fichier d'en-tête (header) -->

<?php include_once __DIR__."/$view.php"; ?>  <!-- Inclusion dynamique de la vue principale (selon la variable $view) -->

</body>
</html>
