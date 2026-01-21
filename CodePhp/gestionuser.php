<?php 

session_start();

include "acces.php";

if ($_SESSION['role'] === 'utilisateur'){
    header("Location: connecter.php");
}
$requete = 'SELECT id, nom, prenom, mail, rolee, statut FROM utilisateur';
$reponse = $bdd->prepare($requete);
$reponse->execute();
$tableau = $reponse->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateur</title>
    <link type="stylesheet" href="../CodeCSS/gestionuser.css">
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
            <th>Role</th>
            <th>Statut</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tableau as $tableau): ?>
            <tr>
                <td><?= htmlspecialchars($tableau['id']) ?></td>
                <td><?= htmlspecialchars($tableau['nom']) ?></td>
                <td><?= htmlspecialchars($tableau['prenom']) ?></td>
                <td><?= htmlspecialchars($tableau['mail']) ?></td>
                <td><?= htmlspecialchars($tableau['rolee']) ?></td>
                <td><?= htmlspecialchars($tableau['statut']) ?></td>
                <td><form action='gestioncompte.php' method="POST">
                    <input name="stat" id="stat" value="<?= htmlspecialchars($tableau['statut'])?>" type="hidden">
                    <input name="id" id="id" value="<?= htmlspecialchars($tableau['id']) ?>" type="hidden">
                    <button type='submit'>
                    <?php 
                    if ($tableau['statut'] === 'activer'){
                        echo "desactiver le compte";
                    }
                    if ($tableau['statut'] === 'desactiver'){
                        echo "activer le compte";
                    }
                    ?>
                    </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>