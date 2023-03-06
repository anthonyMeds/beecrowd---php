<?php

$notas = [100,50,20,10,5,2,1];
$valor = fgets(STDIN);

foreach($notas as $index => $nota)
{
    $contagem = intval($valor / $notas[$index]);
    echo "$contagem nota(s) de R$ $notas[$index],00".PHP_EOL;

    $valor = $valor % $notas[$index];
}
?>