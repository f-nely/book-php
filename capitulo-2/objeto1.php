<?php

class Produto
{
    public string $descricao;
    public int $estoque;
    public float $preco;
}

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 4;

$p2 = new Produto;
$p2->descricao = 'Café';
$p2->estoque = 20;
$p2->preco = 17.98;

var_dump($p1);
var_dump($p2);