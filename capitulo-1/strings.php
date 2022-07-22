<?php

/*
Manipulação de strings
Uma string é uma cadeia de caracteres alfanuméricos. Para declarar uma
string, podemos usar aspas simples ' ' ou aspas duplas " ".
A diferença é que todo conteúdo dentro de aspas duplas é avaliado pelo
PHP. Assim, se a string contém uma variável, essa variável será traduzida
pelo seu valor.
*/

$variavel = 'Isto é um teste';
$variavel = "Isto é um teste";

$fruta = 'maçã';
echo "como {$fruta} <br>"; // como maçã
echo 'como $fruta <br>';   // como $fruta

$texto = <<<CHAVE
Aqui nesta área
você poderá escrever
textos com múltiplas linhas.
CHAVE;

echo $texto . '<br>';

// Funções para manipulação de strings

// STRTOUPPER
echo strtoupper('Convertendo para maiusculo') . '<br>' . PHP_EOL;

// STRTOLOWER
echo strtolower('CONVERTENDO PARA MINUSCULO') . '<br>' . PHP_EOL;

