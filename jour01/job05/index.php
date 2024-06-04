<?php

$i = 0;

while ($i <= 1337) :
    if ($i == 26 or $i == 37 or $i == 88 or $i == 1111) :
        echo "<br>";

    else:
        echo $i . "<br>";
    endif;
    $i++;
endwhile;
