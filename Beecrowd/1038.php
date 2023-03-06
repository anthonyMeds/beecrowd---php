<?php
$string = explode(" ",fgets(STDIN));
$codigo = $string[0];
$quantidade = $string[1];
$valor = [0,0,0,0,0];

$tabela = [
    1 => [
        'especificacao' => 'Cachorro Quente',
        'preco' => 4.00,
    ],
    2 => [
        'especificacao' => 'X-Salada',
        'preco' => 4.50,  
    ],
    3 => [
        'especificacao' => 'X-Bacon',
        'preco' => 5.00,  
    ],
    4 => [
        'especificacao' => 'Torrada Simples',
        'preco' => 2.00,  
    ],
    5 => [
        'especificacao' => 'Refrigerante',
        'preco' => 1.50,  
    ],
];

foreach($tabela as $chave => $dados) 
{
    $valor[$chave] = ($quantidade) * ($dados['preco']); //para acessar o array associativo é so fazer $dados ''especificacoes
}

echo "Total: R$ ".number_format($valor[$codigo],2,'.',' ').PHP_EOL;

?>