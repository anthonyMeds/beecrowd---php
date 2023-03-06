<?php
$x = 1;

while ($x != 0) {
    // read input from user
    $x = (int)trim(fgets(STDIN));

    if($x == 0){
        break;
    }


    // if x is odd, add 1 to make it even
    if ($x % 2 != 0) {
        $x++;
    }

    $sum = 0;
    // calculate sum of five consecutive even numbers
    for ($i=0; $i < 5 ; $i++) { 
        $sum += $x;
        $x +=2;
    }

    // print result
    echo $sum . "\n";
}

?>
