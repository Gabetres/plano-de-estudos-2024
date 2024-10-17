<?php

$caminhoDoArquivo = __DIR__ . '/teste.txt';
$arquivoLido = fopen($caminhoDoArquivo, "a");
$inserirFrase = "\nphp é incrivel";
$escreveFinal = fwrite($arquivoLido, $inserirFrase);


