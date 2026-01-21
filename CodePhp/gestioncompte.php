<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "acces.php";

$stat = $_POST['stat'];
$iduser = $_POST['id'];

if ($stat === 'activer'){
   $requete='UPDATE utilisateur SET statut = :statut WHERE id = :iduser';
   $reponse=$bdd->prepare($requete);
   $reponse->bindValue(":statut", "desactiver", PDO::PARAM_STR);
   $reponse->bindValue(":iduser", $iduser, PDO::PARAM_INT);
   $reponse->execute();
   header("Location:gestionuser.php");
}

if ($stat === 'desactiver'){
   $requete='UPDATE utilisateur SET statut = :statut WHERE id = :iduser';
   $reponse=$bdd->prepare($requete);
   $reponse->bindValue(":statut", "activer", PDO::PARAM_STR);
   $reponse->bindValue(":iduser", $iduser, PDO::PARAM_INT);
   $reponse->execute();
   header("Location:gestionuser.php");
}
?>