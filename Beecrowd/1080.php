<?php
$numbers = array();
for ($i = 0; $i < 100; $i++) {
    $numbers[$i] = intval(trim(fgets(STDIN))); // reading input from stdin
}

$highestNumber = $numbers[0];
$position = 0;

foreach($numbers as $keys => $values) {
    if ($numbers[$keys] > $highestNumber) {
        $highestNumber = $numbers[$keys];
        $position = $keys;
    }
}

echo $highestNumber . "\n";
echo ($position + 1) . "\n";
?>
