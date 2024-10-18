<?php

class ContaCorrente extends ContaBancaria
{
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        int $saldo,
    ) {
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
    }

    public function cobrarTarifa()
    {
        $this->saldo -= 29.9;
        return 'Tarifa de R$ 29,90 debitada da sua conta corrente';
    }
    
    public function sacar($valor)
    {
        $this->saldo -= $valor;
        $this->saldo -= 0.10;
        return 'Saque de R$ ' . $valor . ' realizado com sucesso!';
    }
}
