<?php
$n = intval(fgets(STDIN));
$arr = array_map('intval', explode(' ', fgets(STDIN)));

$menorValor = min($arr);
$posicao = array_search($menorValor, $arr);

echo "Menor valor: $menorValor".PHP_EOL;
echo "Posicao: $posicao".PHP_EOL;
?>
