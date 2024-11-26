<?php

class ContaBancaria
{
    protected string $numeroDaConta;
    protected string $nome;
    protected float $saldo;

    public function __construct(string $numeroDaConta, string $nome, float $saldo)
    {
        $this->numeroDaConta = $numeroDaConta;
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    public function recuperaSaldo()
    {
        return "{$this->nome} tem " . "R$" . number_format($this->saldo, 2);
    }

    public function deposita($valor): float
    {
        if ($valor < 0) {
            echo "Valor invalido";
        }
        $this->saldo = $this->saldo + $valor;
        return $this->saldo;
    }

    public function saca($valor): float
    {
        if ($valor > $this->saldo || $valor < 0) {
            echo "Transação invalida!\nSaldo Disponivel: " . "R$" . number_format($this->saldo, 2);
            exit();
        }
        $this->saldo = $this->saldo - $valor;
        return $this->saldo;
    }
}

$contaBancariaDeGabriel = new ContaBancaria(32131231, "Gabriel Tres", 500);

$contaBancariaDeGabriel->deposita(1000);
$contaBancariaDeGabriel->saca(2);
echo $contaBancariaDeGabriel->recuperaSaldo();

