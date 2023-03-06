<?php
$dias = intval(fgets(STDIN));
$tempo = [365,30,1];

foreach($tempo as $index => $anoMesDia){
    $contagem[$index] = intval($dias / $tempo[$index]);
    $dias = $dias % $tempo[$index];
}

echo "{$contagem[0]} ano(s)".PHP_EOL;
echo "{$contagem[1]} mes(es)".PHP_EOL;
echo "{$contagem[2]} dia(s)".PHP_EOL;
?>