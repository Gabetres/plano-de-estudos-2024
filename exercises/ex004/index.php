<?php 

require __DIR__ . '/src/model/ContaBancaria.php';
require __DIR__ . '/src/model/ContaCorrente.php';

$conta = new ContaBancaria(
    'Nubank',
    'Gabriel',
    '1234-5',
    '12345-6',
    1000
);

echo $conta->depositar(500) . "\n";
echo $conta->sacar(200) . "\n";
echo $conta->obterSaldo() . "\n";

$contaCorrente = new ContaCorrente(
    'Inter',
    'nomeAleatorio',
    '1234-5',
    '12345-6',
    5000
);

echo $contaCorrente->cobrarTarifa() . "\n";
echo $contaCorrente->sacar(500) . "\n";
echo $contaCorrente->obterSaldo() . "\n";
