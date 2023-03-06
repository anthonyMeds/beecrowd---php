<?php

$x = 1;

while ($x > 0) {
    $x = fgets(STDIN);

    for($i = 1; $i <= $x; $i++){
        if ($i == $x) {
            echo $i.PHP_EOL;
        }else {
            echo $i.' ';
        }
    } 
   
}