<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include "acces.php";

if (!isset($_SESSION['user'])) {
    header("Location: connexionform.php");
}

if ($_SESSION['role'] === 'admin') {
    $requete = "SELECT * FROM Ticket";
    $reponse = $bdd->prepare($requete);
    $reponse->execute();
    $tableau = $reponse->fetchAll();
    var_dump($tableau);

}else{
    header("Location: connecter.php");
}

?>