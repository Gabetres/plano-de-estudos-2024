<?php

function resolveOperacaoMatematica(int $num1, int $num2, string $operacao): float
{
    switch ($operacao) {
        case "soma":
            return $num1 + $num2;
        case "subtracao":
            return $num1 - $num2;
        case "multiplicacao":
            return $num1 * $num2;
        case "divisao":
            return $num1 / $num2;
        default:
            return "Operação inválida";
    }
}

echo resolveOperacaoMatematica(5, 5, "soma");
