<?php
session_start();
include "acces.php";

if ($_SESSION['role'] === 'utilisateur'){
    header('Location: connecter.php');
}
$requete = 'SELECT * FROM Ticket';
$reponse = $bdd->prepare($requete);
$reponse->execute();
$tableau = $reponse->fetchAll();
var_dump($tableau);
foreach ($tableau['id'] as $valeur){
    echo($valeur . "\n");
} 

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CodeCSS/dashboard.css">
    <title>Dashboard <?php echo($_SESSION['user']);?></title>
</head>
<body>
    <p>Bienvenue <?php echo($_SESSION['user']);?> </p><br>
    <p>Connexion du <?php echo($_SESSION['date']);?> à <?php echo($_SESSION['heure']); ?> </p>
    <form action="deconnexion.php" method="POST">
        <button type="submit">Se déconnecter</button>
    </form>
</body>
</html>