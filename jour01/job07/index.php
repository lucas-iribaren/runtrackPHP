<?php

$i = 1;

while ($i <= 100) :
    if ($i %3 === 0 and $i %5=== 0) :
        echo "FizzBuzz <br>";
    elseif ($i %5 === 0) :
        echo "Buzz <br>";
    elseif ($i %3 === 0) :
        echo "Fizz <br>";
    else :
        echo $i . "<br>"; 
    endif;
    $i++;
endwhile;
