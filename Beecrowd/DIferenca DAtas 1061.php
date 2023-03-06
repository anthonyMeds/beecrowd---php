<?php
$dia1 = explode(" ",fgets(STDIN));
$inicio = explode(" : ",fgets(STDIN));
$dia2 = explode(" ",fgets(STDIN));
$fim = explode(" : ",fgets(STDIN));

$diaInicio = intval($dia1[1]);
$horaInicio = intval($inicio[0]);
$minutoInicio = intval($inicio[1]);
$segundoInicio = intval($inicio[2]);

$diaFim = intval($dia2[1]);
$horaFim = intval($fim[0]);
$minutoFim = intval($fim[1]);
$segundoFim = intval($fim[2]);


$duracaoTotal = ($diaFim - $diaInicio) * 24 * 60 * 60 + ($horaFim - $horaInicio) * 3600
+ ($minutoFim - $minutoInicio) * 60 + ($segundoFim - $segundoInicio);


$W = floor($duracaoTotal / 86400);
$resto = ($duracaoTotal % 86400);
$X = floor($resto / 3600);
$resto = ($resto % 3600);
$Y = floor($resto / 60);
$Z = ($resto % 60);

echo "$W dia(s)".PHP_EOL;
echo "$X hora(s)".PHP_EOL;
echo "$Y minuto(s)".PHP_EOL;
echo "$Z segundo(s)".PHP_EOL;