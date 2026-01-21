<?php
include "acces.php";

if ($_POST['statut']== 'ouvert'){
    echo 'test';
    // $requete = 'SELECT * FROM Ticket';
    // $reponse = $bdd->prepare($requete);
    // $reponse->execute();
    // $_REQUEST= 'UPDATE Ticket SET statut = "fermé" WHERE id = :id';
    // $reponse = $bdd->prepare($requete);
    // $reponse->execute(['id' => $tableau['id']]);
};
//header('Location: dashboard.php');
?>