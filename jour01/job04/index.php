<?php

$i = 0;

while ($i <= 1337) :
    if ($i == 42) :
        echo "<b><u>$i</u></b>\n";
    else:
        echo $i . "\n";
    endif;
    $i++;

endwhile;
