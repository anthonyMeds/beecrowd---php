<?php
// lê a operação desejada
$operacao = rtrim(fgets(STDIN));

// lê a matriz M[12][12]
$matriz = array();
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 12; $j++) {
        $matriz[$i][$j] = floatval(rtrim(fgets(STDIN)));
    }
}

// top area
$soma = 0;
$contagem = 0;
for ($i = 0; $i <= 4; $i++) {
  for ($j = $i + 1; $j <= 10 - $i; $j++) {
      $soma += $matriz[$i][$j];
      $contagem++;
  }
}

// imprime o resultado com uma casa decimal
if ($operacao == 'S') {
    echo number_format($soma, 1, '.', '') . "\n";
} elseif ($operacao == 'M') {
    echo number_format($soma / $contagem, 1, '.', '') . "\n";
}
