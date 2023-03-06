<?php

$numero = 0;

for($i = 0; $i <= 100; $i++ )
{
   $numero = $i; 
    if((($numero % 2) == 0) && $numero !=0){
        echo $numero.PHP_EOL;
    }
}
?>