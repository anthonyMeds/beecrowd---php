<?php
$numerador = 1;
$denominador = 1;
$s = 0;

for ($i = 1; $i <= 39; $i += 2) { 
    $s += $i / $denominador; 
    $denominador *= 2;
}

echo number_format($s, 2, '.', '') . PHP_EOL;
