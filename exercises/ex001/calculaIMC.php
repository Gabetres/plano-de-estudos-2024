<?php

function calculaIMC(int $peso, float $altura): int
{
    return $peso / ($altura * $altura);
}

echo calculaIMC(60, 1.81);
