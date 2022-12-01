<?php

require_once 'OrcavelInterface.php';

class Produto2 implements OrcavelInterface
{
    private string $descricao;
    private int $estoque;
    private float $preco;

    public function __construct(string $descricao, int $estoque, float $preco) 
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function recuperaPreco(): float
    {
        return $this->preco;
    }
}