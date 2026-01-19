<?php 

session_start();

include "acces.php";

if ($_SESSION['role'] === 'utilisateur'){
    header("Location: connecter.php");
}
$requete = 'SELECT * FROM utilisateur';
$reponse = $bdd->prepare($requete);
$reponse->execute();
$tableau = $reponse->fetchAll();
var_dump($tableau);
foreach ($tableau[0] as $valeur){
    echo($valeur . "\n");
} 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateur</title>
</head>
<body>

</body>
</html>