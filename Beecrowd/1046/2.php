<?php
$string = explode(" ", fgets(STDIN));
$inicio = $string[0];
$fim = $string[1];
$duracao = 0;

for($i = $inicio; $i < $fim; $i++)
{
    if($fim > $inicio){
        $duracao ++;
        break;
    } elseif($fim < $inicio){
        $duracao = $fim + 24 - $inicio;
    } 
}

// if($fim > $inicio && $fim < 24){
//     $duracao = $fim - $inicio;
//     $duracao2 = $duracao;
// }elseif ($fim < $inicio)
//  {
//    $duracao2 = (24 - $inicio) + $fim;
//  }else{
//     $duracao2 = 24;
//     $duracao = 24;
//  }

echo "O JOGO DUROU $duracao HORA(S)".PHP_EOL;
?>