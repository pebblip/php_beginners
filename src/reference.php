<?php

$a = 10;
$b =& $a;
$c = $a;
$b = 20;

echo $a, PHP_EOL;
echo $b, PHP_EOL;
echo $c, PHP_EOL;

function array_pass($array) {
    $array[0] *= 2;
    $array[1] *= 2;
}

function array_pass_ref(&$array) {
    $array[0] *= 2;
    $array[1] *= 2;
}

$x = 10;
$y = 20;

$array = [$x, $y];

array_pass($array);

echo $x, PHP_EOL;
echo $y, PHP_EOL;

var_dump($array);

array_pass_ref($array);

echo $x, PHP_EOL;
echo $y, PHP_EOL;

var_dump($array);



