<?php
$tipo = trim(fgets(STDIN));
$elementos = 0; 
$soma = 0;

$matriz = array();

for ($i=0; $i < 12 ; $i++) { 
    for ($j=0; $j < 12 ; $j++) { 
        $matriz[$i][$j] = intval(fgets(STDIN));
    }
}

for ($i=0; $i < 12 ; $i++) { 
    for ($j=0; $j < 12 ; $j++) { 
        if($j < $i){
            $soma += $matriz[$i][$j];
            $elementos++;
        }
    }
}

if ($tipo == 'S') {
    echo number_format($soma, 1, '.', '') . PHP_EOL;
} elseif ($tipo == 'M') {
    $media = $soma / $elementos;
    echo number_format($media, 1, '.', '') . PHP_EOL;
}
?>