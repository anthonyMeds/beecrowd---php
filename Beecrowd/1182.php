<?php
$coluna = intval(fgets(STDIN));
$tipo = trim(fgets(STDIN));

$matriz = array();

for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $matriz[$i][$j] = floatval(fgets(STDIN));
    }
}

$soma = 0;
for ($i = 0; $i < 12; $i++) {
    $soma += $matriz[$i][$coluna];
}

if ($tipo == 'S') {
    echo number_format($soma, 1, '.', '') . PHP_EOL;
} elseif ($tipo == 'M') {
    $media = $soma / 12;
    echo number_format($media, 1, '.', '') . PHP_EOL;
}
?>