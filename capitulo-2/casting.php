<?php

$produto = new stdClass;

$produto->descricao = 'Chocolate Amargo';
$produto->estoque = 100;
$produto->preco = 14.98;

$vetor1 = (array) $produto;
print $vetor1['descricao'] . '<br>';
var_dump($vetor1);

$vetor2 = [ 'descricao' => 'Chocolate Amargo', 'estoque' => 100, 'preco' => 14.98];
$produto2 = (object) $vetor2;
var_dump($produto2);