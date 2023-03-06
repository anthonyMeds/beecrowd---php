<?php
$idade = 0;
$soma = 0;
$contagem = 0;

while ($idade >= 0) {
    $idade = intval(fgets(STDIN));
    if ($idade >= 0) {
        $soma += $idade;
        $contagem++;
    }
}

$media = $soma / $contagem;
echo number_format($media, 2, '.', '') . "\n";
