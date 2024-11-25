<?php
$teclado = ['q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm'];
$tecla = 'u';

$indiceAnterior = array_search($tecla,$teclado) - 1;
$resultado = $teclado[$indiceAnterior];

echo $resultado;