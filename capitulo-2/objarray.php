<?php

$produto = [
    'descricao' => 'Chocolate Amargo',
    'estoque' => 100,
    'preco' => 14.98,
];

$objeto = new stdClass;
foreach ($produto as $chave => $valor) {
    $objeto->$chave = $valor;
}

var_dump($objeto);