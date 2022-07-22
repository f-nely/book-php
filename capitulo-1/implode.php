<?php

/*
IMPLODE
Converte um array em uma string, agrupando os elementos do array por meio de um elemento cola (glue).
string implode (string $glue , array $pieces)
*/

$arr = [10, 05, 2015];
echo implode('/', $arr);