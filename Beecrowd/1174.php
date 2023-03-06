<?php
$a = array();

$v = floatval(fgets(STDIN));
$a[0] = $v;

for ($i = 1; $i < 100; $i++) {
    $v = floatval(fgets(STDIN));
    $a[$i] = $v;
}

foreach($a as $chave => $valor) {
    if ($valor <= 10) {
        echo "A[$chave] = " . number_format($valor, 1, '.', '') . PHP_EOL;
    }
}
