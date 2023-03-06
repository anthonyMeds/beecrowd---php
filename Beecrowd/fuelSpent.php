<?php
$tempo = fgets(STDIN);
$velMedia = fgets(STDIN);
$economia = 12;

$distancia = $velMedia * $tempo;
$litros = $distancia / $economia;

echo number_format($litros,3,'.', '').PHP_EOL;

?>