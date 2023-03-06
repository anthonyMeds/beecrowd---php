<?php
$n = readline();
$primeiro = 1;

for ($i = 0; $i < $n ; $i++) { 
    $segundo = $primeiro * $primeiro;
    $terceiro = $segundo * $primeiro;
    echo "$primeiro $segundo $terceiro".PHP_EOL;

    $primeiro++;
}