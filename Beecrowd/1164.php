<?php

$t = intval(fgets(STDIN));
$soma = 0;
$contagem = 0;

while (true) {
    $contagem++;

    if ($contagem > $t) {
        break;
    }

    $x = intval(fgets(STDIN));
    $soma = 0;

    for ($i=1; $i < $x ; $i++) { 
        if ($x % $i == 0) {
            $soma += $i;
        }
    }

        if ($soma == $x) {
            echo "$x eh perfeito".PHP_EOL;
        } else {
            echo "$x nao eh perfeito".PHP_EOL;
        }



}