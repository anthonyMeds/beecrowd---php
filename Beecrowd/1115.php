<?php
$numeros = explode(" ",readline());

while ($numeros[0] != 0 && $numeros[1] != 0 ) {
    if ($numeros[0] > 0 && $numeros[1] > 0) {
        echo 'primeiro'.PHP_EOL;
    } elseif ($numeros[0] < 0 && $numeros[1] > 0) {
        echo 'segundo'.PHP_EOL;
    } elseif ($numeros[0] < 0 && $numeros[1] < 0) {
        echo 'terceiro'.PHP_EOL;
    } elseif ($numeros[0] > 0 && $numeros[1] < 0) {
        echo 'quarto'.PHP_EOL;
    } 
    $numeros = explode(" ",readline());
}