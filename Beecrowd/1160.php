<?php
$t = intval(fgets(STDIN));
$contagem = 0;

while (true) {
    $contagem++;

    if ($contagem > $t) {
        break;
    }

    $linha = explode(" ", fgets(STDIN));
    
    $PA = intval($linha[0]);
    $PB = intval($linha[1]);
    $G1 = floatval($linha[2]);
    $G2 = floatval($linha[3]);

    $anos = 0;

    while ($PA <= $PB) {
        $PA += intval($PA * ($G1/100));
        $PB += intval($PB * ($G2/100));
        $anos++;

        if ($anos > 100) {
            echo "Mais de 1 seculo.".PHP_EOL;
            break;
        }
    }

    if ($anos <= 100) {
        echo "$anos anos.".PHP_EOL;
    }
}
