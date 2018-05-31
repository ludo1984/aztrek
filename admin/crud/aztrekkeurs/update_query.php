<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];
$pseudo = $_POST["pseudo"];

$user = getOneEntity("user", $id);
$picture = !is_null($user["picture"]) ? $user["picture"] : ""; // Image présente avant update

// Vérifier si l'utilisateur a uploadé un fichier
if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion des données en BDD
updateUser($id, $pseudo, $picture);

// Redirection vers la liste
header("Location: index.php");