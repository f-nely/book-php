<?php

abstract class Conta
{
    protected int $agencia;
    protected string $conta;
    protected float $saldo;

    public function __construct(int $agencia, string $conta, float $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if ($saldo >= 0) {
            $this->saldo = $saldo;
        }
    }

    public function recuperaInfo(): string
    {
        return "Agência: {$this->agencia}, Conta: {$this->conta}";
    }

    public function depositar(float $quantia): void
    {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    abstract function retirar(float $quantia);
}