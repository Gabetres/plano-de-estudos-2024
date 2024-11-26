<?php

$a = 10;
$b = 15;
$resultadoAB = $a / $b;

if (is_int($resultadoAB)) {
    echo "{$a} é divisivel por {$b}";
}else{
    echo "{$a} não é divisivel por {$b}";
}
