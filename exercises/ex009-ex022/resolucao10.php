<?php

$a = 7;
$b = 5;
$c = 9;

$valores = [$a, $b, $c];
rsort($valores);

foreach ($valores as $valoresEmOrdem) {
    echo "$valoresEmOrdem\n";
}
