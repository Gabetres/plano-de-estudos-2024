<?php

class ContaBancaria
{
    public string $banco;
    public string $nomeTitular;
    public string $numeroAgencia;
    public string $numeroConta;
    public int $saldo;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return 'Seu saldo atual é: R$ ' . $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Depósito de R$ ' . $valor . ' realizado com sucesso!';
    }

    public function sacar($valor)
    {
        if ($this->saldo > $valor) {
            $this->saldo -= $valor;
            return 'Saque de R$ ' . $valor . ' realizado com sucesso!';
        } else {
            return 'Saldo insuficiente';
        }
    }
}
