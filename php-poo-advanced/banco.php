<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;



$endero = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias' , $endero);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endero);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'B', 'C', 'D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endero));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
