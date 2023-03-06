<?php

$x = array();

for ($i=0; $i < 10 ; $i++) { 
    $x[$i] = trim(intval(fgets(STDIN)));
}

foreach($x as $chave => $valor)
{
    if ($valor <= 0) {
        $valor = 1;
    }

    echo "X[$chave] = $valor\n";
}
