<?php

$sum = 0;
$num = explode(" ",readline());
sort($num);
    
    while ($num[0] > 0 && $num[1] > 0 ){
        
        for ($j=$num[0]; $j <= $num[1]; $j++) {
            
            $sum += $j;
            echo "$j ";
        
        }
        echo "Sum=$sum" . PHP_EOL;
        $sum = 0;

        $num = explode(" ",readline());
        sort($num);
    }

    
