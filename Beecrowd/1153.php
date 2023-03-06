<?php
$n = intval(fgets(STDIN));

$fatorial = 1;

for($i = 1; $i <= $n ; $i++){
    $fatorial *= $i;
}

echo $fatorial.PHP_EOL;