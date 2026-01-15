<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'acces.php';
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];

$options = [
    'cost' => 12,
];

$mdp_hache = password_hash($mdp, PASSWORD_BCRYPT, $options);

    $requete='INSERT INTO utilisateur(nom, prenom, mail, mdp) VALUES (:nom, :prenom, :mail, :mdp)';
    $reponse=$bdd->prepare($requete);
    $reponse->bindValue(':nom', $nom, PDO::PARAM_STR);
    $reponse->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $reponse->bindValue(':mail', $email, PDO::PARAM_STR);
    $reponse->bindValue(':mdp', $mdp_hache, PDO::PARAM_STR);
    $reponse->execute();
    header('Location: ../index.html');
    $reponse = closeCursor();
?>