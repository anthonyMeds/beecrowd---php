<?php
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $linha = explode(" ", fgets(STDIN));
    $x = intval($linha[0]);
    $y = intval($linha[1]);
    $soma = 0;

    if ($x % 2 == 0) {
        $x += 1;
    }

    for ($j = 0; $j < $y; $j++) {
        $soma += $x;
        $x+=2;
    }

    echo $soma . PHP_EOL;
}
