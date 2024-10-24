<?php 

require_once 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Desenvolvedor;

use Alura\Banco\Service\ControladorDeBonificacoes;


$desenvolvedor = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$desenvolvedor->sobeDeNivel();

$gerente = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
);

$diretor = new Diretor(
    'Ana Paula',
    new CPF('456.987.123-10'),
    'Diretor',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($desenvolvedor);
$controlador->adicionaBonificacao($gerente);
$controlador->adicionaBonificacao($diretor);

echo $controlador->recuperaTotal();
