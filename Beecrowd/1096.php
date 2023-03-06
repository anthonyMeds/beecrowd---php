<?php
$I = 1;
$J = 7;

for($i = 0; $i < 9; $i++){   
   while($I <= 9){
    for($j = 0; $j < 3; $j++){
        echo "I=$I J=$J".PHP_EOL;
        $J -= 1;
    }
    $I += 2;
    $J = 7;
}
}
