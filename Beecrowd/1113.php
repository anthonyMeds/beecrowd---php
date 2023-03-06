<?php

$num = explode(" ",readline());
  
    while ($num[0] > 0 && $num[1] > 0 && $num[0] != $num[1] ){
        if($num[0] > $num[1]){
            echo "Decrescente".PHP_EOL;
        }else{
            echo "Crescente".PHP_EOL;
        }
        $num = explode(" ",readline());
    }
     

    
