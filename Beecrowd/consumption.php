<?php
$km = fgets(STDIN);
$litros = fgets(STDIN);

$consumo = number_format( $km / $litros ,3,'.', ' ');
echo "$consumo km/l".PHP_EOL;
?>