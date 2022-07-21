<?php

declare(strict_types=1);

function calcula_imc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

echo Calcula_imc(75, 1.85);
echo '<br>';

/*
O PHP também permite definir uma função com o número de
argumentos variáveis, ou seja, permite obtê-los de forma dinâmica,
mesmo sem saber quais são ou quantos são. Para saber quais são,
utilizamos a função func_get_args(); para saber a quantidade de
argumentos, utilizamos a função func_num_args().
*/

function ola(): void
{
    $argumetos = func_get_args();
    $quatidade = func_num_args();
    for ($n = 0; $n < $quatidade; $n++) {
        echo 'Olá ' . $argumetos[$n] . ', ';
    }
}

ola('Tailor', 'Diana', 'Nikita', 'Elton');
echo '<br>';

// O PHP permite chamadas de funções recursivamente.
function fatorial(int $num): int
{
    if ($num == 1) {
        return $num;
    } else {
        return $num * fatorial($num - 1);
    }
}

echo fatorial(5) . '<br>';
echo fatorial(7);


