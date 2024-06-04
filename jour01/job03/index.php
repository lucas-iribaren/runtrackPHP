<?php

$integerVar = 42;
$floatVar = 3.14;
$stringVar = "LaPlateforme";
$booleanVar = true;
$arrayVar = [1, 2, 3]; 

$variables = [
    ['type' => 'integer', 'name' => 'integerVar', 'value' => $integerVar],
    ['type' => 'float', 'name' => 'floatVar', 'value' => $floatVar],
    ['type' => 'string', 'name' => 'stringVar', 'value' => $stringVar],
    ['type' => 'boolean', 'name' => 'booleanVar', 'value' => $booleanVar ? 'true' : 'false'],
    ['type' => 'array', 'name' => 'arrayVar', 'value' => implode(", ", $arrayVar)]
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tableau des Variables PHP</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Tableau des Variables PHP</h2>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables as $variable) : ?>
            <tr>
                <td><?php echo $variable['type']; ?></td>
                <td><?php echo $variable['name']; ?></td>
                <td><?php echo $variable['value']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
