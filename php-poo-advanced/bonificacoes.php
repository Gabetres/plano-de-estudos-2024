<?php 

require_once 'autoload.php';
use Alura\Banco\Model\{Funcionario, CPF};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Patricia',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);

echo $controlador->recuperaTotal();
