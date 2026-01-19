<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <form action="inscription.php" method="POST">
        <label for="nom">nom:</label>
        <input type="text" name="nom" id="nom" required="required"></br>

        <label for="prenom">prénom:</label>
        <input type="text" name="prenom" id="prenom" required="required"></br>

        <label for="email">email:</label>
        <input type="email" name="email" id="email" required="required"></br>

        <label for="mdp">mot de passe:</label>
        <input type="password" name="mdp" id="mdp" required="required"></br>
        
        <button type="submit">s'inscrire</button>
    </form>
</body>
</html>