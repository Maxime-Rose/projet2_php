<?php
session_start();

if (!isset ($_SESSION['role'])){
    header('Location: connexionform.php');
    exit();
}

if ($_SESSION['statut'] === "desactiver"){
    header('Location: attente.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - <?php echo($_SESSION['user']);?></title>
    <link rel="stylesheet" href="../CodeCSS/connecter.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="navitem"><a href="mestickets.php">Mes tickets </a></div>
            <div class="navitem"><a href="dashboard.php">Dashboard </a></div>
            <div class="navitem"><a href="connecter.php">Accueil </a></div>
        </div>
    </header>
    <p>Bienvenue <?php echo($_SESSION['user']);?> </p><br>
    <p>Connexion du <?php echo($_SESSION['date']);?> à <?php echo($_SESSION['heure']); ?> </p>
    <form action="deconnexion.php" method="POST">
        <button type="submit"> Se déconnecter</button>
    </form>
</body>
</html>