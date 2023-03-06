<?php
$n = intval(fgets(STDIN));

$N = array();
$N[0] = $n;

for ($i=1; $i < 20 ; $i++) { 
    $n = intval(fgets(STDIN));
    array_unshift($N, $n);
}

foreach ($N as $chave => $valor) {
    echo "N[$chave] = $valor".PHP_EOL;
}
