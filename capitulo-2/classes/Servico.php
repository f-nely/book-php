<?php

class Servico implements OrcavelInterface
{
    private string $descricao;
    private float $preco;

    public function __construct(string $descricao, float $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function recuperaPreco(): float
    {
        return $this->preco;
    }
}