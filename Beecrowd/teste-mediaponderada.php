<?php
//notas
$notasRedacao = 960;
$notasNatureza = 700;
$notasHumanas = 740;
$notasLinguagens = 650;
$notasMatematica = 800;


//PESOS
$redacao = 2.5;
$natureza = 1.5;
$humanas = 1;
$linguagens = 1.5;
$matematica = 3.5;

$pesos = 10;

//MÉDIA PONDERADA

$mediaPonderada = (($notasRedacao * $redacao + $notasNatureza * $natureza + $notasMatematica * $matematica + $notasLinguagens * $linguagens + $notasHumanas * $humanas) / $pesos);

echo "MÉDIA PONDERADA = $mediaPonderada".PHP_EOL;