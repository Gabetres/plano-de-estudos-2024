<?php 

require_once 'autoload.php';

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\EditorVideo;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Desenvolvedor;

use Alura\Banco\Service\ControladorDeBonificacoes;


$desenvolvedor = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$desenvolvedor->sobeDeNivel();

$gerente = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$diretor = new Diretor(
    'Ana Paula',
    new CPF('456.987.123-10'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('456.987.231-11'),
    '1500'
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($desenvolvedor);
$controlador->adicionaBonificacao($gerente);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($umEditor);

echo $controlador->recuperaTotal();
