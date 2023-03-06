<?php

$n = intval(fgets(STDIN));
$lista = [];

for($i = 0; $i < $n; $i++){
    $lista[] = intval(fgets(STDIN)); 
}

foreach($lista as $numero)
{
    if ($numero == 0 ) {
        echo "NULL".PHP_EOL;
    } elseif($numero < 0) {
        if ($numero % 2 == 0) {
            echo "EVEN NEGATIVE".PHP_EOL;
        }else {
            echo "ODD NEGATIVE".PHP_EOL;
        }
    }else {
        if ($numero % 2 == 0) {
            echo "EVEN POSITIVE".PHP_EOL;
        }else {
            echo "ODD POSITIVE".PHP_EOL;
        }
    }
}
