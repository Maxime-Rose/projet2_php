<?php

date_default_timezone_set('Europe/Paris');
date_default_timezone_get();

error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'acces.php';

$mail = $_POST['mail'];
$mdpuser = $_POST['mdp'];

if(!empty($mail) && !empty($mdpuser)){
    $requete='SELECT mail, mdp, prenom FROM utilisateur WHERE mail = :mail ';
    $reponse=$bdd->prepare($requete);
    $reponse->bindValue(':mail', $mail , PDO::PARAM_STR);
    $reponse->execute();
    $tableau = $reponse->fetchAll();
    var_dump($tableau);

    if (password_verify($mdpuser, $tableau[0]['mdp'])){
        session_start();
        $_SESSION['mail']= $mail;
        $_SESSION['user'] = $tableau[0]['prenom'];
        $_SESSION['date']= date("d-m-Y");
        $_SESSION['heure'] = date("H:i:s");
        header('Location: connecter.php');
    }else{
        header('Location: ../connexion.html');
    }
}




?>
