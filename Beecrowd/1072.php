<?php
$N = fgets(STDIN);
$dentro = 0;
$fora = 0;

for($i = 0; $i < $N; $i++){
$x = fgets(STDIN);
    if($x >= 10 && $x <= 20){
        $dentro++;
    }else{
        $fora++;
    }
}
echo "$dentro in".PHP_EOL;
echo "$fora out".PHP_EOL;
?>