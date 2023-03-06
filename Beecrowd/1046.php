<?php
$val = explode(" ", fgets(STDIN));
$inicio = (int) $val[0];
$fim = (int) $val[1];

if ($fim <= $inicio)
    $fim += 24;

echo "O JOGO DUROU " . ($fim - $inicio) . " HORA(S)\n";