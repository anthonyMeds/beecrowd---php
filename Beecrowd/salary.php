<?php

$number = fgets(STDIN);
$hoursWorked = fgets(STDIN);
$valueHour =  fgets(STDIN);

$salary = number_format($hoursWorked * $valueHour, 2, '.', '');

echo "NUMBER = $number";
echo "SALARY = U$ $salary".PHP_EOL;

?>