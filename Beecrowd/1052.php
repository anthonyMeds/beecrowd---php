<?php
$mes = fgets(STDIN);
$meses = ['January','February','March','April','May','June','July','August','September','October','November','December'];

echo $meses[$mes-1].PHP_EOL;
?>