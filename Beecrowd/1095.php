<?php
$I = 1;
$J = 60;

for($i = 0; $i < 13; $i++){   
    echo "I=$I J=$J".PHP_EOL;
    $I += 3;
    $J -= 5;
}
