<?php
session_start();
include "acces.php";

if ($_SESSION['role'] === 'utilisateur'){
    header('Location: connecter.php');
}
$requete = 'SELECT * FROM Ticket';
$reponse = $bdd->prepare($requete);
$reponse->execute();
$tableau = $reponse->fetchAll();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CodeCSS/dashboard.css">
    <title>Dashboard <?php echo($_SESSION['user']);?></title>
</head>
<body>
      <header>
        <div class="navbar">
            <div class="navitem"><a href="mestickets.php">Mes tickets </a></div>
            <div class="navitem"><a href="dashboard.php">Dashboard </a></div>
            <div class="navitem"><a href="connecter.php">Accueil </a></div>
            <div class="navitem"><a href="gestionuser.php">Gérer les utilisateur</a></div>
        </div>
    </header>
    <p>Bienvenue sur votre dashboard <?php echo($_SESSION['user']);?> </p><br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Statut</th>
            <th>Date création</th> 
            <th>Action</th>
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
                <td><form action="gestionticket.php" method="POST">
                        <input type="hidden" name="stat" id="stat" value="<?= htmlspecialchars($tableau['statut'])?>">
                        <input type="hidden" name="id" id="id" value="<?= htmlspecialchars($tableau['id'])?>">
                        <button type="submit">
                            <?php 
                    if ($tableau['statut'] === 'ouvert'){
                        echo "fermé le ticket";
                    }
                    if ($tableau['statut'] === 'fermé'){
                        echo "réouvrir le ticket";
                    }
                    ?>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
    <p>Connexion du <?php echo($_SESSION['date']);?> à <?php echo($_SESSION['heure']); ?> </p>
    <form action="deconnexion.php" method="POST">
        <button type="submit">Se déconnecter</button>
    </form>
</body>
</html>