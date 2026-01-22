<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

 if(!isset($_SESSION["user"])) { 
    header("location: formulaire.php"); 
} 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un ticket</title>
    <link rel="stylesheet" href="../CodeCSS/creation_ticket.css">
</head>
<body>
        <header>
        <div class="navbar">
            <div class="navitem"><a href="mestickets.php">Mes tickets </a></div>
            <div class="navitem"><a href="dashboard.php">Dashboard </a></div>
            <div class="navitem"><a href="connecter.php">Accueil </a></div>
            <div class="navitem"><a href="creation_ticket.php">Créer un ticket</a></div>
            <div class="navitem"><a href="deconnexion.php">Se déconnecter</a></div>
        </div>
    </header>

<h2>Créer un ticket</h2>

<form action="envoieticketbdd.php" method="POST">
    <label for="titre">Titre</label><br>
    <input type="text" name="titre" required="required"><br><br>

    <label for="description">Description</label><br>
    <textarea name="description" required="required"></textarea><br><br>

    <button type="submit">Créer le ticket</button>
</form>

</body>
</html>

