<?php

$x = readline();
$y = readline();

if ($x > $y) {
    $troca = $y;
    $y = $x;
    $x = $troca;
}

for ($i = $x + 1; $i < $y ; $i++ ){
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i.PHP_EOL;
    }

}