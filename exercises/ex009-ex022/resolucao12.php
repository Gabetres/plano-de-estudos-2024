<?php 

$n = readline("Digite um numero de 20 a 90:\n");

if ($n >= 20 && $n <= 90){
    echo "{$n} esta entre 20 e 90";
}else {
    echo "{$n} não esta entre 20 e 90";
}