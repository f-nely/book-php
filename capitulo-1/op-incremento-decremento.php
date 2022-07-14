<?php

/*
++$var Pré-incremento. Incrementa $a em um e, então, retorna $a .
$var++ Pós-incremento. Retorna $a e, então, incrementa $a em um.
--$var Pré-decremento. Decrementa $a em um e, então, retorna $a .
$var-- Pós-decremento. Retorna $a e, então, decrementa $a em um.
*/

$var = 100;

echo $var++ . ' '; // retorna 100 e incrementa para 101
echo ++$var . ' '; // incrementa para 102 e retorna
echo $var-- . ' '; // retorna 102 e decrementa para 101
echo --$var . ' '; // decrementa para 100 e retorna
