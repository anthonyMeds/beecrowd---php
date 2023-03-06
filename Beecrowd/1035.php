<?php
$string = explode(" ",fgets(STDIN));
$a = $string[0];
$b = $string[1];
$c = $string[2];
$d = $string[3];

if($b > $c && 
    $d > $a && 
    ($c + $d) > ($a + $b) &&
     $c > 0 && 
     $d > 0 && 
     $a % 2 == 0){
    echo "Valores aceitos".PHP_EOL;
} else {
    echo "Valores nao aceitos".PHP_EOL;
}
?>