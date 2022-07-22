<?php

/*
STRPAD
Preenche uma string com outra string, dentro de um tamanho
especíco, podendo preencher com caracteres à esquerda, à direita ou centralizado.
string str_pad (string $input , int $pad_length [, string
$pad_string = " "
[, int $pad_type = STR_PAD_RIGHT ]])
*/

$texto = 'The Beatles';
echo str_pad($texto, 20, '*', STR_PAD_LEFT) . '<br>';
echo str_pad($texto, 20, '*', STR_PAD_BOTH) . '<br>';
echo str_pad($texto, 20, '*');