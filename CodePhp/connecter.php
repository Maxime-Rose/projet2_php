<?php
session_start();

if (!isset($_SESSION['mail'])){
    header('Location: ../connexion.html');
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - <?php echo($_SESSION['user']);?></title>
</head>
<body>
    <p>Bienvenue <?php echo($_SESSION['user']);?> </p><br>
    <p>Connexion du <?php echo($_SESSION['date']);?> à <?php echo($_SESSION['heure']); ?> </p>
</body>
</html>