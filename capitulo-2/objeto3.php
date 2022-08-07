<?php

class Produto
{
    private string $descricao;
    private int $estoque;
    private float $preco;
}

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 8;