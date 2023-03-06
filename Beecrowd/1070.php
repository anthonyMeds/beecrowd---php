<?php
$x = (int) fgets(STDIN); // read $x and convert it to integer

//Checa se é par
if ($x % 2 == 0) {
    $x++;
}
//mostrar só os impares
for ($i = 0; $i < 6; $i++) {
    echo ($x) . PHP_EOL;
    $x += 2;
}
?>
