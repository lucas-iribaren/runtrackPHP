<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Affichage des Arguments GET</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <form action="" method="GET">
            <label for="param1">Paramètre 1 :</label>
            <input type="text" id="param1" name="param1">
            <br><br>
            <label for="param2">Paramètre 2 :</label>
            <input type="text" id="param2" name="param2">
            <br><br>
            <label for="param3">Paramètre 3 :</label>
            <input type="text" id="param3" name="param3">
            <br><br>
            <input type="submit" value="Soumettre">
        </form>

        <h2>Tableau des arguments GET</h2>
        <table>
            <thead>
                <tr>
                    <?php foreach($_GET as $key => $value): ?>
                        <th><?php echo htmlspecialchars($key); ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($_GET as $key => $value): ?>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>