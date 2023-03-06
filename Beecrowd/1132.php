<?php
$x = readline();
$y = readline();
$soma = 0;

if ($x > $y) {
    $troca = $y;
    $y = $x;
    $x = $troca;
}

for($i = $x; $i < $y+1; $i++){
    if ($i % 13 != 0) {
        $soma += $i;
    }
}

echo $soma.PHP_EOL;