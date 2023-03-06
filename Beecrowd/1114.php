<?php

$senha = readline();

while ($senha != 2002) {
    echo"Senha Invalida".PHP_EOL;

    $senha = readline();
}

echo "Acesso Permitido".PHP_EOL;