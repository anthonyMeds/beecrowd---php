<?php

$tempo = [3600,60,1];
$valor = fgets(STDIN);
$contagem = [0,0,0];

foreach($tempo as $index => $unidade){
    $contagem[$index] = intval($valor / $tempo[$index]);
    $valor = $valor % $tempo[$index];
}
echo $contagem[0] . ":" . $contagem[1] . ":" . $contagem[2] . "\n";
?>

