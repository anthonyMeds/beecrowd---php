<?php
$ddd = fgets(STDIN);
$cidades = ['Brasilia','Salvador','Sao Paulo','Rio de Janeiro','Juiz de Fora','Campinas','Vitoria','Belo Horizonte'];

if($ddd == 61){
    echo $cidades[0].PHP_EOL;
    return;
}

if($ddd == 71){
    echo $cidades[1].PHP_EOL;
    return;
}

if($ddd == 11){
    echo $cidades[2].PHP_EOL;
    return;
}
if($ddd == 21){
    echo $cidades[3].PHP_EOL;
    return;
}
if($ddd == 32){
    echo $cidades[4].PHP_EOL;
    return;
}
if($ddd == 19){
    echo $cidades[5].PHP_EOL;
    return;
}
if($ddd == 27){
    echo $cidades[6].PHP_EOL;
    return;
}
if($ddd == 31){
    echo $cidades[7].PHP_EOL;
    return;
}
echo "DDD nao cadastrado".PHP_EOL;
?>