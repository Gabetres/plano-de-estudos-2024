<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\{Conta,Titular,ContaCorrente,ContaPoupanca};
use Alura\Banco\Model\{Endereco, CPF};



$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);

// $conta->transfere();
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();


