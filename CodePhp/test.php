<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include "acces.php";

$stat = $_POST['stat'];
$idticket = $_POST['id'];

if ($stat === 'ouvert'){
    echo "test";
    $requete= 'UPDATE Ticket SET statut = :statut WHERE id = :id';
    $reponse = $bdd->prepare($requete);
    $reponse->bindValue(":statut", "fermé", PDO::PARAM_STR);
    $reponse->bindValue(":id", $idticket, PDO::PARAM_INT);
    $reponse->execute();
    header('Location: dashboard.php');
}

if ($stat === 'fermé'){
    echo "test";
    $requete= 'UPDATE Ticket SET statut = :statut WHERE id = :id';
    $reponse = $bdd->prepare($requete);
    $reponse->bindValue(":statut", "ouvert", PDO::PARAM_STR);
    $reponse->bindValue(":id", $idticket, PDO::PARAM_INT);
    $reponse->execute();
    header('Location: dashboard.php');
}

?>