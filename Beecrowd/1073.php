<?php
$N = fgets(STDIN);

for($i = 1; $i <= $N; $i++){
    if($i % 2 == 0){
        $multiplicacao = pow($i,2);
        echo "$i ^2 = $multiplicacao".PHP_EOL;
    }
}
?>