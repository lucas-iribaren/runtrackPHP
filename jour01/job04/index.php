<?php

$i = 0;

while ($i < 1337) :
    if ($i == 0) :
        $i++;
        continue;
    elseif ($i == 42) :
        echo "<b><u>$i</u></b><br>";
    else :
        echo $i . "<br>";
    endif;
    $i++;
endwhile;
