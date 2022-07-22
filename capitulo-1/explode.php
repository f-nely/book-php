<?php

/*
EXPLODE
Converte uma string em um array, quebrando os elementos por meio de um separador (delimiter).
array explode (string $delimiter , string $string [, int $limit ])
*/

$str = '10/05/2015';
echo '<pre>';
print_r(explode('/', $str));