<?php
$salario = fgets(STDIN);

if($salario >=0 && $salario <= 2000){
    $valor = 0;
    echo "Isento".PHP_EOL;
    return;
}elseif ($salario > 2000 && $salario <= 3000) {
    $valor = ($salario - 2000) * 0.08 ;
}elseif ($salario > 3000 && $salario <= 4500) {
    $valor = ($salario - 3000) * 0.18 + 1000 * 0.08 ;
}else {
    $valor = ($salario - 4500) * 0.28 + 1500 * 0.18 + 1000 * 0.08 ;
}

echo "R$ ".number_format($valor,2,'.','').PHP_EOL;
?>