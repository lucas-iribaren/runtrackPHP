<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation du nombre</title>
</head>

<body>
    <form action="" method="GET">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <button type="submit">valider</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        if (isset($_GET['nombre']) && is_numeric($_GET['nombre'])) {
            $nombre = intval($_GET['nombre']);
            if ($nombre % 2 == 0) {
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
        } else {
            echo "Veuillez saisir un nombre valide.";
        }
    }
    ?>
</body>

</html>