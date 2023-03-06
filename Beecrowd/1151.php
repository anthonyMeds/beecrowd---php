<?php

$n = intval(fgets(STDIN));
$lista = array();

$lista[0] = 0;
$lista[1] = 1;

echo "$lista[0] $lista[1]";

for ($i = 2; $i < $n; $i++) { 
    $lista[$i] = $lista[$i - 1] + $lista[$i - 2];
    echo " " . $lista[$i];
    if ($i == $n - 1) {
        echo "\n";
    }
}

