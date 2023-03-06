<?php
$x = fgets(STDIN); // read $x and convert it to integer
$y = fgets(STDIN); // read $x and convert it to integer
$troca = 0;
    if($x > $y){
        $troca = $y;
        $y = $x;
        $x = $troca;
    }

$soma = 0; 

//mostrar só os impares
for ($i = $x + 1; $i < $y; $i++) {
   if($i % 2 != 0){
    $soma += $i;
   }
}
    echo $soma.PHP_EOL;
?>
