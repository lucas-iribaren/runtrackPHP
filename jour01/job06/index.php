<?php

$i = 0;

while ($i < 100) :
    if ($i <= 20) :
        echo "<i>$i</i><br>";
    elseif ($i >= 25 and $i <= 50) :
        if ($i == 42) :
            echo "LaPlateforme_ <br>";
        else :
            echo "<u>$i</u><br>";
    endif;
    else: 
        echo $i . "<br>";
    endif;
    $i++;
endwhile;
