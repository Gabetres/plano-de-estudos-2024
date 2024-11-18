<?php 

use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'Bairro Qualquer', 'Minha Rua','71B');
$outroEndereco = new Endereco('Rio','Centro','Uma Rua Aí', '50');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;
