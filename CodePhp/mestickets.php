<?php
session_start();
include "acces.php";

if (!isset($_SESSION['user'])){
    header('Location: connecter.php');
}

$requete = 'SELECT * FROM Ticket WHERE id_user = :id_user';
$reponse = $bdd->prepare($requete);
$reponse->bindValue(":id_user", $_SESSION['id_user'], PDO::PARAM_INT);
$reponse->execute();
$tableau = $reponse->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Tickets - <?php echo $_SESSION['user']?></title>
    <link rel="stylesheet" href="../CodeCSS/mestickets.css">
</head>
<body>
        <header>
        <div class="navbar">
            <div class="navitem"><a href="mestickets.php">Mes tickets </a></div>
            <div class="navitem"><a href="dashboard.php">Dashboard </a></div>
            <div class="navitem"><a href="connecter.php">Accueil </a></div>
        </div>
    </header>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Statut</th>
            <th>Date création</th> 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tableau as $tableau): ?>
            <tr>
                <td><?= $tableau['id'] ?></td>
                <td><?= htmlspecialchars($tableau['titre']) ?></td>
                <td><?= htmlspecialchars($tableau['description']) ?></td>
                <td><?= htmlspecialchars($tableau['statut']) ?></td>
                <td><?= htmlspecialchars($tableau['DateCreation'])?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>