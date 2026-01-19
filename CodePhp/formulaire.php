<?php
session_start();

if(!isset($_SESSION["mail"])){
    header("Location: connexionform.php");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket</title>
</head>


        <body>
            
        <form action="creation_ticket.php" method="post">


        <label>titre:</label>
        <input name="titre" id="titre" type="text"/>


        <label>votre nom :</label>
        <input name="nom" id="nom" type="text"/>

        <label>votre mail:</label>
        <input name="mail" id="mail" type="text"/>

        <label>description:</label>
        <input name="description" id="description" type="text"/>

        <button type="submit">valider</button>

      
        </form>
    </body>
</html>