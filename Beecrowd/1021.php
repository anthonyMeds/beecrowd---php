<?php

$notas = [10000,5000,2000,1000,500,200,100,50,25,10,5,1];
$valor = fgets(STDIN);
$valorCorrigido = $valor * 100;
$contagemNotas = [0,0,0,0,0,0,0,0,0,0,0,0];

foreach($notas as $index => $nota)
{
    $contagemNotas[$index] = intval(($valorCorrigido/ $notas[$index]));
    $valorCorrigido = ($valorCorrigido % $notas[$index]);
}
echo "NOTAS:\n";
echo $contagemNotas[0] . " nota(s) de R$ 100.00\n";
echo $contagemNotas[1]. " nota(s) de R$ 50.00\n";
echo $contagemNotas[2] . " nota(s) de R$ 20.00\n";
echo $contagemNotas[3] . " nota(s) de R$ 10.00\n";
echo $contagemNotas[4] . " nota(s) de R$ 5.00\n";
echo $contagemNotas[5] . " nota(s) de R$ 2.00\n";
echo "MOEDAS:\n";
echo $contagemNotas[6] . " moeda(s) de R$ 1.00\n";
echo $contagemNotas[7] . " moeda(s) de R$ 0.50\n";
echo $contagemNotas[8] . " moeda(s) de R$ 0.25\n";
echo $contagemNotas[9] . " moeda(s) de R$ 0.10\n";
echo $contagemNotas[10] . " moeda(s) de R$ 0.05\n";
echo $contagemNotas[11] . " moeda(s) de R$ 0.01\n";
?>

