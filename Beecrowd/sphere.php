<?php
$raio = fgets(STDIN);
$pi = 3.14159;

$volume = number_format((4 / 3) * $pi * pow($raio, 3), 3, '.','');
echo "VOLUME = $volume".PHP_EOL;

?>