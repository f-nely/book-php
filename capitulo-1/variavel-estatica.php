<?php

declare(strict_types=1);

/*
Variáveis estáticas
Dentro do escopo de uma função, podemos armazenar variáveis de forma
estática. Assim, elas mantêm o valor que lhes foi atribuído na última
execução. Declaramos uma variável estática com o operador static.
*/

function percorre(float $quilometros): void
{
    static $total;
    $total += $quilometros;
    echo "percorreu mais {$quilometros} do total de {$total}<br>";
}

percorre(100);
percorre(200);
percorre(50);