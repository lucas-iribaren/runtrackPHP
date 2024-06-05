<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre pire cauchemar</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom"></label>
        <input type="text" name="nom" id="nom">
        <label for="mdp"></label>
        <input type="password" name="mdp" id="mdp">

        <button type="submit">Se connecter</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["nom"] == 'john' && $_POST["mdp"] == 'Rambo') {
                echo 'ce n\'est pas ma guerre';
            }  else {
                echo 'votre pire cauchemar';
            }
        }
    ?>
</body>
</html>