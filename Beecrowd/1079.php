<?php
$n = fgets(STDIN);
$media = [];

for ($i=0; $i < $n ; $i++ ) { 
    $frase = explode(" ", fgets(STDIN));
    $soma = ($frase[0] * 2) + ($frase[1] * 3) + ($frase[2] * 5);
    $media[] = number_format($soma / 10,1,'.','');
}

foreach($media as $valor)
{
    echo $valor.PHP_EOL;
}