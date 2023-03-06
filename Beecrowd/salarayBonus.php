<?php

$nome = fgets(STDIN);
$fixo = fgets(STDIN);
$vendas = fgets(STDIN);

$salarioFinal  = number_format($fixo + 0.15 * $vendas, 2, '.','');
echo "TOTAL = R$ $salarioFinal".PHP_EOL;

?>