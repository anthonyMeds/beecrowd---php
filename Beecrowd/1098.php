<?php
$I = 0;
$J = 1;

for($i = 0; $i < 9; $i++){   
   while($I <= 2){

        for($j = 0; $j < 3; $j++){
            echo "I=$I J=$J".PHP_EOL;
            $J += 1;
        }

        $I += 0.2;
        $J = 1 + $I;
    }
  
}
