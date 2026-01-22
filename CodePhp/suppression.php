<?php
session_start();

include "acces.php";

error_reporting(E_ALL);
ini_set("display_errors", 1);

$idticket = $_POST['id'];

$requete = 'DELETE FROM Ticket WHERE id = :idticket';
$reponse=$bdd->prepare($requete);
$reponse->bindValue(":idticket", $idticket, PDO::PARAM_INT);
$reponse->execute();
header('Location:mestickets.php');
?>