<?php

/*
Arrays multidimensionais ou matrizes são arrays nos quais algumas de
suas posições podem conter outros arrays de forma recursiva
*/

$carros = [
    'Palio' => [
        'cor' => 'azul',
        'potência'=>'1.0',
        'opcionais'=>'Ar Cond.',
    ],
    'Corsa' => [
        'cor'=>'cinza',
        'potência'=>'1.3',
        'opcionais'=>'MP3',
    ],
    'Gol' => [
        'cor'=>'branco',
        'potência' => '1.0',
        'opcionais' => 'Metalica',
    ],
];

var_dump($carros);

// iterações
foreach ($carros as $modelo => $caracteristicas) {
    echo "=> modelo {$modelo} <br>";
    foreach ($caracteristicas as $caracteristica => $valor) {
        echo " - característica {$caracteristica} => {$valor} <br>";
    }
}