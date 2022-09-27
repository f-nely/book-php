<?php

class ContaCorrente extends Conta
{
    protected float $limite;

    public function __construct(int $agencia, string $conta, float $saldo, float $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function retirar(float $quantia)
    {
        if ($this->saldo + $this->limite >= $quantia) {
            $this->saldo -= $quantia;
        } else {
            return false; // retirada permitida
        }
        return true; // retirada não permitida
    }
}