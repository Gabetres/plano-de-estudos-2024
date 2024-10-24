<?php 

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}