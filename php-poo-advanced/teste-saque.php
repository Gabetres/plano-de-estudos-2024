<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\ContaPoupanca;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;



$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();


