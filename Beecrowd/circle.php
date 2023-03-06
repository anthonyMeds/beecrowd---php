<?php
$R = fgets(STDIN);
$pi = 3.14159;

$A = number_format($pi * pow($R,2), 4, '.','');
echo "A=$A".PHP_EOL;

?>