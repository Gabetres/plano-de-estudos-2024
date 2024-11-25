<?php 

$a = 10;
$b = 20;

$temp = $a;
$a = $b;
$b = $temp;

echo $a . PHP_EOL;
echo $b;