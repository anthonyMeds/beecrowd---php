<?php

$novoGrenal = 1;
$totalJogos = 0;
$vitGremio = 0;
$vitInter = 0;
$empate = 0;

while ($novoGrenal == 1) {
    $totalJogos ++;

    $jogo = explode(" ", readline());

    $inter = $jogo[0];
    $gremio = $jogo[1];

    if ($inter > $gremio) {
        $vitInter++;
    }elseif ($gremio > $inter) {
        $vitGremio++;
    }else{
        $empate++;
    }

    echo "Novo grenal (1-sim 2-nao)".PHP_EOL;
    $novoGrenal = readline();
}

echo "$totalJogos grenais".PHP_EOL;
echo "Inter:$vitInter".PHP_EOL;
echo "Gremio:$vitGremio".PHP_EOL;
echo "Empates:$empate".PHP_EOL;

if ($vitInter > $vitGremio) {
    echo "Inter venceu mais".PHP_EOL;
}else {
    echo "Gremio venceu mais".PHP_EOL;
}

