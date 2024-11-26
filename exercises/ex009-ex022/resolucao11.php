<?php

$nome = "Gabriel";
$notas = [10, 9, 8];

$media = array_sum($notas) / count($notas);
$faltas = 3;
$numeroDeAulas = 80;

$porcentagemDeFaltasPraPassar = ($numeroDeAulas * 0.25); // 


switch (true) {
    case $media >= 7 && $faltas < $porcentagemDeFaltasPraPassar:
        echo "{$nome} foi aprovado, com a média {$media} e com {$faltas} faltas de {$numeroDeAulas} aulas";
        break;
    case $media < 7 && $faltas >= $porcentagemDeFaltasPraPassar:
        echo "{$nome} foi reprovado por média e falta, com a média {$media} e com {$faltas} faltas de {$numeroDeAulas} aulas";
        break;
    case $media < 7:
        echo "{$nome} foi reprovado por média, com a média {$media} e com {$faltas} faltas de {$numeroDeAulas} aulas";
        break;
    case $faltas >= $porcentagemDeFaltasPraPassar:
        echo "{$nome} foi reprovado por falta, com a média {$media} e com {$faltas} faltas de {$numeroDeAulas} aulas";
        break;
    default:
        echo "parametros invalido";
};
