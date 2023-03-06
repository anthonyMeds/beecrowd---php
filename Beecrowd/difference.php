<?php
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
$d = fgets(STDIN);

$p1 = $a * $b;
$p2 = $c * $d;

$diferenca = $p1 - $p2;
echo "DIFERENCA = $diferenca".PHP_EOL;

?>