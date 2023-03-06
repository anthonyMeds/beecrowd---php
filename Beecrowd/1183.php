<?php
$tipo = trim(fgets(STDIN));
$elementos = 0;

$matriz = array();
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $matriz[$i][$j] = floatval(fgets(STDIN));
    }
}

$soma = 0;
for ($i = 0; $i < 12; $i++) {
    for ($j = 11; $j < 1; $j--) {
        if ($j > $i) {
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
