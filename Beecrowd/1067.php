<?php
$x = fgets(STDIN);
$i = 0;
$contagem = 6;

for ($i > 0 ; $i <= $x; $i++) { 
    if($i % 2 != 0){
        echo $i.PHP_EOL;
    }
}