<?php

class Produto 
{
    private string $descricao;
    private int $estoque;
    private float $preco;
    private Fabricante $fabricante;
    
    public function __construct(string $descricao, int $estoque, float $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function recuperaDescricao(): string
    {
        return $this->descricao;
    }

    public function defineFabricante(Fabricante $fabricante): void
    {
        $this->fabricante = $fabricante;
    }

    public function recuperaFabricante(): Fabricante
    {
        return $this->fabricante;
    }
}
