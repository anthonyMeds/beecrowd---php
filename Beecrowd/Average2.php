<?php
$a = fgets(STDIN) * 2;
$b = fgets(STDIN) * 3;
$c = fgets(STDIN) * 5;
$pesos = 2 + 3 + 5;

$media = number_format((($a + $b + $c) / $pesos), 1, '.',' ');

echo "MEDIA = $media".PHP_EOL;