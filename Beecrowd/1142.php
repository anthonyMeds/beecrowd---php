<?php
$n = readline();
$primeiro = 1;

for ($i=0; $i < $n; $i++) {
    $segundo = $primeiro + 1 ;
    $terceiro = $primeiro + 2 ;
    echo "$primeiro $segundo $terceiro PUM".PHP_EOL;

    $primeiro += 4;
}