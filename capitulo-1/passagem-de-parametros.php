<?php

declare(strict_types=1);

/*
Passagem de parâmetros
Há dois tipos de passagem de parâmetros: por valor (by value) e por 
referência (by reference). Por padrão, os valores são passados by 
value para as funções. Assim o parâmetro que a função recebe é 
tratado como variável local dentro do contexto da função, não 
alterando o seu valor externo. Os objetos são uma exceção, pois 
são tratados por referência na passagem de parâmetros.
*/

/* function incrementa(int $variavel, int $valor): void
{
    $variavel += $valor;
}

$a = 10;
incrementa($a, 20);
echo $a; // 10 
*/

function incrementa(int &$variavel, int $valor): void
{
    $variavel += $valor;
}

$a = 10;
incrementa($a, 20);
echo $a; // 30
