<?php
$string = explode(" ",fgets(STDIN));
$a = $string[0];
$b = $string[1];
$multiplos = [$a,$b];

sort($multiplos);

if(($multiplos[1] % $multiplos[0]) == 0){
    echo "Sao Multiplos".PHP_EOL;
}else{
    echo "Nao sao Multiplos".PHP_EOL;
}
?>