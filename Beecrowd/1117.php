<?php

$x = floatval(readline());

while ($x < 0 || $x > 10 ) {
    echo 'nota invalida'.PHP_EOL;

    $x = floatval(readline());

}

$y = floatval(readline());

while ($y < 0 || $y > 10) {
    echo 'nota invalida'.PHP_EOL;

    $y = floatval(readline());
}

$media = number_format(($x + $y) / 2,2,'.','');

echo "media = $media".PHP_EOL;
