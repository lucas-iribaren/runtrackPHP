<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="" method="GET">
        <label for="arg1">Argument 1:</label>
        <input type="text" id="arg1" name="arg1">
        <br><br>
        <label for="arg2">Argument 2:</label>
        <input type="text" id="arg2" name="arg2">
        <br><br>
        <label for="arg3">Argument 3:</label>
        <input type="text" id="arg3" name="arg3">
        <br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $getCount = count($_GET);
        echo "Nombre d'arguments GET : " . $getCount;
    }
    ?>
</body>
</html>
    