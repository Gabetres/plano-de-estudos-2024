<?php

$caminhoDoArquivo = __DIR__ . '/teste.txt';
$arquivo = fopen($caminhoDoArquivo, "r");
$lerPrimeiraLinha = fgets($arquivo);
echo $lerPrimeiraLinha;