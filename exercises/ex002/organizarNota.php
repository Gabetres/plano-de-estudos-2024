<?php 

$notas = [10, 7, 4, 3, 15, 22,];

rsort($notas);

$primeirosTres = array_slice($notas, 0, 3);
print_r($primeirosTres);