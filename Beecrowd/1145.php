<?php
$values = explode(" ", readline());
$x = $values[0];
$y = $values[1];

for ($i = 1; $i <= $y; $i++) {
    if ($i % $x == 0) {
        echo "$i\n";
    } else {
        echo "$i ";
    }
}