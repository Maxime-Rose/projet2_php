<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

 if(!isset($_SESSION["user_id"])) { 
    header("location: formulaire.php"); 
} 

if (!empty($_titre) && !empty($_description)) { 
   echo $_post["id_user"]

    $requete = "INSERT INTO `Ticket`(`id_user`, `titre`, `description`) VALUES (:user, :titre, :descriptionn)";

    $response=$bdd->prepare($requete);
    $response->bindValue(':user',$user_id, PDO::PARAM_STR);
    $response->bindValue(':titre',$titre, PDO::PARAM_STR);
    $response->bindValue(':descriptionn',$description, PDO::PARAM_STR);
    $response->execute();

        echo "Ticket créé";
    } else {
        echo "Tous les champs sont requis";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un ticket</title>
</head>
<body>

<h2>Créer un ticket</h2>

<form method="POST">
    <label>Titre</label><br>
    <input type="text" name="titre" required><br><br>

    <label>Description</label><br>
    <textarea name="description" required></textarea><br><br>

    <button type="submit">Créer le ticket</button>
</form>

</body>
</html>

