<?php
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);
$d = fgets(STDIN);
$e = fgets(STDIN);

$lista = [$a,$b,$c,$d,$e];
$contagemPares = 0;
$contagemImpares = 0;
$contagemPositivos = 0;
$contagemNegativos = 0;

foreach($lista as $chave => $numeros)
{
   if($numeros % 2 == 0 ){
        $contagemPares++;
   }else{
        $contagemImpares++;
   }
}

foreach($lista as $chave => $numeros)
{
   if($numeros > 0 ){
        $contagemPositivos++;
   }elseif($numeros < 0){
        $contagemNegativos++;
   }
}

echo "$contagemPares valor(es) par(es)".PHP_EOL;
echo "$contagemImpares valor(es) impar(es)".PHP_EOL;
echo "$contagemPositivos valor(es) positivo(s)".PHP_EOL;
echo "$contagemNegativos valor(es) negativo(s)".PHP_EOL;
          