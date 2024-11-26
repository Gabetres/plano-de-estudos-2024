<?php 

$valorDoProduto = 20;

if($valorDoProduto <= 20){
    $lucro = 0.45;
    $valorFinal = ($lucro * $valorDoProduto) + $valorDoProduto;
    echo $valorFinal;
} else {
    $lucro = 0.30;
    $valorFinal = ($lucro * $valorDoProduto) + $valorDoProduto;
    echo $valorFinal;
}