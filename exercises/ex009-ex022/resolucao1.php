<?php

$n = 12;

switch ($n) {
    case $n > 10:
        echo "{$n} é maior que 10";
        break;
    case $n == 10:
        echo "{$n} é igual a 10";
        break;
    default:
        echo "{$n} é menor que 10";
        break;
}
