<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
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
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $postCount = count($_POST);
        echo $postCount;
    }
    ?>
</body>

</html>