<?php

$valores = (explode(" ",fgets(STDIN)));
$pi = 3.14159;

$areaTriangulo = number_format(($valores[0] * $valores[2]) / 2 ,3, '.', '');
$areaCirculo = number_format($pi * pow($valores[2],2) ,3, '.', '');
$areaTrap = number_format((($valores[0] + $valores[1]) * $valores[2]) / 2 ,3, '.', '');
$areaQuad = number_format( pow($valores[1],2),3, '.', '');
$areaRet = number_format($valores[0] * $valores[1] ,3, '.', '');

echo "TRIANGULO: $areaTriangulo".PHP_EOL;
echo "CIRCULO: $areaCirculo".PHP_EOL;
echo "TRAPEZIO: $areaTrap".PHP_EOL;
echo "QUADRADO: $areaQuad".PHP_EOL;
echo "RETANGULO: $areaRet".PHP_EOL;

?>