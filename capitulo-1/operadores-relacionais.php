<?php

/*Operadores relacionais são usados para estabelecer comparações entre
valores ou expressões, resultando sempre um valor boolean (true ou
false). 
*/
$a = 1234;
$b = '1234';

if ($a === $b) {
    echo "{$a} e {$b} são iguais e do mesmo tipo.";
}

if ($a !== $b) {
    echo "{$a} e {$b} são de tipos diferentes.";
}
