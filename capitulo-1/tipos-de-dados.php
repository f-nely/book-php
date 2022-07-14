<?php

// Tipo booleano
/* São considerados valores falsos em comparações booleanas: 
    • Inteiro 0.
    • Ponto utuante 0.0.
    • Uma string vazia “” ou “0”.
    • Um array vazio.
    • Um objeto sem elementos.
    • Tipo NULL.
*/
$exibir_nome = true;
if ($exibir_nome) {
    echo 'José da Silva<br>';
}

$umidade = 91;
$vai_chover = ($umidade > 90);
if ($vai_chover) {
    echo 'Vai chover<br>';
}

/* Tipos numérico
Números podem ser especi cados em notação decimal (base 10),
hexadecimal (base 16) ou octal (base 8), sendo opcionalmente precedidos
de sinal.   
*/
$a = 1234; // número decimal
$a = -123; // um número negativo
$a = 0123; // número octal (equivalente a 83 em decimal)
$a = 0x1A; // número hexadecimal (equivalente a 26 em decimal)
$a = 1.234; // ponto flutuante
$a = 4e23; // notação científica

/* Tipo string
Uma string é uma cadeia de caracteres alfanuméricos. Para declará-la,
podemos usar aspas simples (‘ ‘) ou aspas duplas (“ “).
*/
$variavel = 'Isto é um teste';
$variavel = "Isto é um teste";

/* Tipo array 
Array é uma lista de valores armazenados na memória que podem ser de
tipos diferentes (números, strings, objetos) e podem ser acessados a 
qualquer momento, pois cada valor é relacionado a uma chave. Um array
também pode crescer dinamicamente com a adição de novos itens.
*/
$cars = ['Palio', 'Corsa', 'Gol'];
echo $cars[1];
echo '<br>';

// Tipo objeto
$carro = new stdClass;
$carro->modelo = 'Jeep Compass';
$carro->ano = 2022;
$carro->cor = 'Cinza';
echo '<pre>';
print_r($carro);
