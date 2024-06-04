<?php

function leetspeak($str)
{
    $str = strtoupper($str); // Convertit la chaîne en majuscules
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == 'E') {
            $str[$i] = '3';
        }
        if ($str[$i] == 'O') {
            $str[$i] = '0';
        }
        if ($str[$i] == 'I' or $str[$i] =='L') {
            $str[$i] = '1';
        }
        if ($str[$i] == 'S') {
            $str[$i] = '5';
        }
        if ($str[$i] == 'T') {
            $str[$i] = '7';
        }
    }
    return $str;
}
$str = 'elephant';

echo leetspeak($str);