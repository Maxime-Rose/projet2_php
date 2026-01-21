<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include "acces.php";

session_start();
if(!isset($_SESSION["user"])) { 
    header("Location: connexionform.php"); 
} 

$titre = $_POST['titre'];
$description = $_POST['description'];
$requete = "INSERT INTO Ticket(id_user, titre, description) VALUES (:id_user, :titre, :description)";
$reponse=$bdd->prepare($requete);
$reponse->bindValue(':id_user',$_SESSION['id_user'], PDO::PARAM_INT);
$reponse->bindValue(':titre', $titre, PDO::PARAM_STR);
$reponse->bindValue(':description', $description, PDO::PARAM_STR);
$reponse->execute();



?>