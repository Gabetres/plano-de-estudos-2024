<?php 
$custoDoCarro = 1000;
$porcentagemDoDistribuidor = $custoDoCarro * 0.28;
$porcentagemDoImposto = $custoDoCarro * 0.45;

$custoDoCarroFinal = $custoDoCarro + $porcentagemDoDistribuidor + $porcentagemDoImposto;

echo $custoDoCarroFinal;