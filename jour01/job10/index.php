<?php

function bonjour($jour){ 
    if ($jour == false) {
        echo"Bonsoir";
    } else {
            echo"Bonjour";
        }
        
    }
$jour = true;
echo bonjour($jour);
$jour = false;
echo bonjour($jour);
