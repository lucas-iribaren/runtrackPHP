<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Division par zéro impossible";
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Modulo par zéro impossible";
            }
    }
}

$resultat = calcule(10, '/', 5);
echo $resultat;