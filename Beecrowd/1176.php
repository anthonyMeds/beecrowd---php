<?php

$t = intval(fgets(STDIN));
$contagem = 0;

while (true) {
    $contagem++;
    if ($contagem > $t) {
        break;
    }

$fibArray = [0,1];

    for ($i=2; $i <= 60 ; $i++) { 
        $fibArray[$i] = $fibArray[$i - 2] + $fibArray[$i-1];
    }

    $fib = intval(fgets(STDIN));

        echo "Fib($fib) = $fibArray[$fib]".PHP_EOL;
}