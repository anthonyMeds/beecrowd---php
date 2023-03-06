<?php
$x = intval(readline());
$z = intval(readline());

while($z <= $x) {
    $z = intval(readline());
}

$contagem = 0;
$soma = 0; 

for ($i=$x; $i <= $z; $i++) { 
    $soma += $i;
    $contagem++;

    if ($soma > $z) {
        break;
    }
}

echo $contagem.PHP_EOL;

