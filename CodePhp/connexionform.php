<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail de Connexion</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="connexion.php" method="POST">
        <label for="mail">Adresse Mail:</label>
        <input type="email" name="mail" id="mail" required="required"><br>
        <label for="mdp">Mot de passe:</label>
        <input type="password" name="mdp" id="mdp" required="required"><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>