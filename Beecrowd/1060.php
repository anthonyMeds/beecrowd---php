<?php
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
$d = fgets(STDIN);
$e = fgets(STDIN);
$f = fgets(STDIN);
$lista = [$a,$b,$c,$d,$e,$f];
$contagem = 0;

foreach($lista as $lista)
{
    if ($lista > 0) {
        $contagem ++;
    }
}

echo "$contagem valores positivos".PHP_EOL;