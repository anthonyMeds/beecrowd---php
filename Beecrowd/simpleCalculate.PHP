<?php
$string1 = explode(" ", fgets(STDIN));
$string2 = explode(" ", fgets(STDIN));

$valorTotal = number_format(($string1[1] * $string1[2] + $string2[1] * $string2[2]), 2, '.', ' ');

echo "VALOR A PAGAR: R$ $valorTotal".PHP_EOL;
