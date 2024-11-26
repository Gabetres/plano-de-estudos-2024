<?php
$a = 11;
$b = 12;
$c = 15;

switch (true) {
    case $a == $b && $a == $c;
        echo "Triangulo Escaleno";
        break;
    case $a == $b || $a == $c || $b == $c:
        echo "Triangulo Equilátero";
        break;
    default;
        echo "Triangulo Isósceles";
        break;
}


// escaleno, quando todos os lados possuem medidas diferentes;
// isósceles, quando existem dois lados que possuem mesma medida;
// ou equilátero, quando todos os lados são congruentes.


