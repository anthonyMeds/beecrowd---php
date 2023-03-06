<?php
$string = explode(" ",fgets(STDIN));
rsort($string);
$a = $string[0];
$b = $string[1];
$c = $string[2];

if($a >= $b + $c) {
    echo "NAO FORMA TRIANGULO".PHP_EOL;
    return;
   
}

if((pow($a,2)) == ((pow($b,2) + pow($c,2)))) {
    echo "TRIANGULO RETANGULO".PHP_EOL;
    
    if($a == $b && $a != $c || $b == $c && $b != $a || $c == $a && $c != $b) {
        echo "TRIANGULO ISOSCELES".PHP_EOL;
    } 
    
    
}

if(pow($a,2) > pow($b,2) + pow($c,2)) {
    echo "TRIANGULO OBTUSANGULO".PHP_EOL;
    
    if($a == $b && $a == $c ) {
        echo "TRIANGULO EQUILATERO".PHP_EOL;
    }else {
        echo "TRIANGULO ISOSCELES".PHP_EOL;
    }
    return;
}

if(pow($a,2) < pow($b,2) + pow($c,2)) {
    echo "TRIANGULO ACUTANGULO".PHP_EOL;
    
    if($a == $b && $a == $c ) {
        echo "TRIANGULO EQUILATERO".PHP_EOL;
    }else {
        echo "TRIANGULO ISOSCELES".PHP_EOL;
    }
    return;
}

?>



