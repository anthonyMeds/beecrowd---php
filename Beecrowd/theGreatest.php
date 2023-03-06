<?php
$valores = (explode(" ",fgets(STDIN)));
$maiorAb = ($valores[0] + $valores[1] + abs($valores[0] - $valores[1]))  / 2 ;
$maior = ($maiorAb + $valores[2] + abs($maiorAb - $valores[2]))  / 2 ;

echo "$maior eh o maior".PHP_EOL;

?>