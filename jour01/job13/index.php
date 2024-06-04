<?php

function occurences($str, $char){
    $j = 0;
    $str = strtolower($str); // Convertit la chaîne en minuscules
    for ($i = 0; $i < strlen($str); $i++) {
        if ($char == $str[$i]) {
            $j++;
            }
    } return $j;
}

$str = 'Escalier';
$char = 'e';

echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurences($str, $char);
