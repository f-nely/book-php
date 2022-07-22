<?php

/*
SUBSTR
Retorna uma parte de uma string. O primeiro parâmetro representa a
string original, o segundo representa o início do corte, e o terceiro, o
tamanho do corte. Se o comprimento (length) for negativo, conta n
caracteres antes do final.
*/
echo substr('Americana', 1) . '<br>'; // mericana
echo substr('Americana', 1, 3) . '<br>'; // mer
echo substr('Americana', 0, -1) . '<br>'; // American
echo substr('Americana', -2) . '<br>'; // na