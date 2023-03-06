<?php

$t = intval(fgets(STDIN));

for ($i = 0; $i < $t; $i++) {

    $x = intval(fgets(STDIN));
    $primo = true;

//o primeiro numero primo é a partir de 2
    if ($x <= 1) {
        $primo = false;
    }

//pode ser feito $j <= $x - 1 mas com a raiz quadrada é mais rápido
    for ($j = 2; $j <= sqrt($x); $j++) {
        if ($x % $j == 0) {
            $primo = false;
            break;
        }
    }


    if ($primo == true) {
        echo "$x eh primo".PHP_EOL;
    } else {
        echo "$x nao eh primo".PHP_EOL;
    }
}

?>
