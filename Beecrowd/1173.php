<?php
$v = trim(intval(fgets(STDIN)));
$n = array();

$n[0] = $v;

for ($i = 1; $i < 10; $i++) {
    $n[$i] = $n[$i-1] * 2;
}

foreach($n as $chave => $valor)
{
    echo "N[$chave] = $valor".PHP_EOL;
}

?>
