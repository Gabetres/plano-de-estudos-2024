<?php
function ordenarArrayAlfabeticamente($array)
{
    sort($array);
    return $array;
}

$arrayDeStrings = ["banana", "maçã", "laranja", "uva"];
$arrayOrdenado = ordenarArrayAlfabeticamente($arrayDeStrings);

print_r($arrayOrdenado);
