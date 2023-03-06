<?php

$N = intval(readline());

for ($i=0; $i < $N; $i++) { 
    $valores = explode(" ",readline());

    if ($valores[1] == 0) {
        echo 'divisao impossivel'.PHP_EOL;
    } elseif ($valores[0] == 0) {
        echo '0.0'.PHP_EOL;
    } else {
        $divisao = floatval($valores[0] / $valores[1]);
        echo number_format($divisao,1,'.','').PHP_EOL;
    }
}
