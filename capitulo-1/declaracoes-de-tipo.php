<?php

declare(strict_types=1);

/* Declarações de tipo
O PHP não requer que você de na explicitamente o tipo da 
variável, pois ele infere o tipo.
Além disso, o PHP tentará fazer conversões automáticas 
de tipo sempre que for possível.
*/
$a = 5;
$b = 'teste';
var_dump($a, $b);
var_dump('teste' . 5);
var_dump('5' + 10);

/* Quando a conversão de tipos não puder ser feita naturalmente, como em
(‘5’ + ‘x’), então uma Warning será emitida: A non-numeric value
encountered. */
function calcula_imc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

var_dump(calcula_imc(75.1, 2));

/* A cláusula strict é definida no arquivo em que a chamada da função é
realizada, e não no arquivo em que ela é definida. */