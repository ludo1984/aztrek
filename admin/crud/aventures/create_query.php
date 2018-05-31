<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$title = $_POST["title"];
$duration = $_POST["duration"];
$country_id = $_POST["country_id"];
$trek_level_id = $_POST["trek_level_id"];

$picture = "";

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion des données en BDD
insertTrek($title, $picture, $duration, $country_id, $trek_level_id);

// Redirection vers la liste
header("Location: index.php");