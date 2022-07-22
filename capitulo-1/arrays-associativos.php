<?php

// criando array associativo
$cores = [
    'vermelho' => 'FF0000',
    'azul' => '0000FF',
    'verde' => '00FF00',
];
var_dump($cores);

// outra forma de criar array associativo
$pessoa = [];
$pessoa['nome'] = 'Maria da Silva';
$pessoa['rua'] = 'São João';
$pessoa['bairro'] = 'Cidade Alta';
$pessoa['cidade'] = 'Porto Alegre';
var_dump($pessoa);

// iterações
$frutas = [];
$frutas['cor'] = 'vermelha';
$frutas['sabor'] = 'doce';
$frutas['formato'] = 'redondo';
$frutas['nome'] = 'maçã';
foreach ($frutas as $key => $value) {
    echo "{$key} => {$value} <br>";
}

// acessando arrays
$contato = [];
$contato['nome'] = 'Pablo';
$contato['empresa'] = 'Adianti';
$contato['peso'] = 73;
// alterações
$contato['nome'] .= ' Dall Oglio';
$contato['empresa'] .= ' Solutions';
$contato['peso'] += 2;
var_dump($contato);

$comidas = [];
$comidas[] = 'Lasanha';
$comidas[] = 'Pizza';
$comidas[] = 'Macarrão';
// alterações
$comidas[1] = 'Pizza Calabresa';
var_dump($comidas);