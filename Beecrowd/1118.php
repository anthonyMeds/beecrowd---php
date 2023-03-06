<?php

$X = 1;

while ($X == 1) {

    $X = readline();
  
    while ($X < 0 || $X > 10) {
        echo 'nota invalida'.PHP_EOL;
        $X = readline();
    }

    $Y = readline();

    while ($Y < 0 || $Y > 10) {
        echo 'nota invalida'.PHP_EOL;
        $Y = readline();
    }

    $media = number_format((($X + $Y) / 2),2,'.','');

    echo "media = $media".PHP_EOL;

    echo "novo calculo (1-sim 2-nao)".PHP_EOL;
    $X = readline();

    while ($X < 1 || $X > 2) {
        echo "novo calculo (1-sim 2-nao)".PHP_EOL;
        $X = readline();
    }
    
}
