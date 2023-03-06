<?php

 $vertebrado = ['ave' => [
    'carnivoro' => 'aguia',
    'onivoro' => 'pomba',
 ],
    'mamifero' => [
    'onivoro' => 'homem',
    'herbivoro' => 'vaca',
    ],
];

$invertebrado = ['inseto' => [
    'hematofago' => 'pulga',
    'herbivoro' => 'lagarta',
 ],
    'anelideo' => [
    'hematofago' => 'sanguessuga',
    'onivoro' => 'minhoca',
    ],
];

$a = strtolower(trim(fgets(STDIN)));
$b = strtolower(trim(fgets(STDIN)));
$c = strtolower(trim(fgets(STDIN)));


if ($a == 'vertebrado') {
    echo $vertebrado[$b][$c].PHP_EOL;
    return;
}
if ($a == 'invertebrado') {
    echo $invertebrado[$b][$c].PHP_EOL;
    return;
}
