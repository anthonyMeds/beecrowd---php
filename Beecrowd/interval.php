<?php
$n = floatval(readline());


if($n >= 0 && $n <= 25.0000){
    echo "Intervalo [0,25]".PHP_EOL;
    return;
}

if($n > 25.0001 && $n <= 50.0000){
    echo "Intervalo (25,50]".PHP_EOL;
    return;
}

if($n > 50.0001 && $n <= 75.0000){
    echo "Intervalo (50,75]".PHP_EOL;
    return;
}

if($n > 75 && $n <= 100){
    echo "Intervalo (75,100]".PHP_EOL;
    return;
}

    echo "Fora do intervalo".PHP_EOL;
?>