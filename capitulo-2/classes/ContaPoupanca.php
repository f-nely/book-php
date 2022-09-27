<?php

final class ContaPoupanca extends Conta
{
    public function retirar(float $quantia)
    {
        if ($this->saldo >= $quantia) {
            $this->saldo -= $quantia;
        } else {
            return false; // retirada não permitida 
        }
        return true; // retirada permitida
    }
}