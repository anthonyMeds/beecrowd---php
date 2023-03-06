<?php
$codigo = 10;
$alcool = 0;
$gasolina = 0;
$diesel = 0;

while ($codigo != 4) {
    $codigo = readline();

    switch ($codigo) {
        case 1:
            $alcool++;
            break;
        case 2:
            $gasolina++;
            break;
        case 3:
            $diesel++;
            break;      
    }
}

echo "MUITO OBRIGADO".PHP_EOL;
echo "Alcool: $alcool".PHP_EOL;
echo "Gasolina: $gasolina".PHP_EOL;
echo "Diesel: $diesel".PHP_EOL;