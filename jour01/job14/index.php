<?php

function leetspeak($str)
{
    $str = strtoupper($str); // Convertit la chaîne en majuscules
    $new_str = ''; 

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == 'E') {
            $new_str .= '3';
        } elseif ($str[$i] == 'O') {
            $new_str .= '0';
        } elseif ($str[$i] == 'I' || $str[$i] == 'L') {
            $new_str .= '1';
        } elseif ($str[$i] == 'S') {
            $new_str .= '5';
        } elseif ($str[$i] == 'T') {
            $new_str .= '7';
        } else {
            $new_str .= $str[$i];
        }
    }

    return $new_str;
}

$str = 'elephant';

echo leetspeak($str);
