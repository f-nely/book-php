<?php

/* echo - É um comando que imprime uma ou mais variáveis no console. */
echo 'a' . '<br>' . PHP_EOL;
echo 'b' . '<br>' . PHP_EOL;

/* print -  É um comando que imprime uma string no console. */
print 'Learning PHP';

/* var_dump - É uma função que imprime o conteúdo de uma variável de forma
detalhada, muito comum para executar um debug. */
$vetor = ['Palio', 'Gol', 'Fiesta', 'Corsa'];
var_dump($vetor);

/*print_r - É uma função que imprime o conteúdo de uma variável de forma
detalhada, assim como a var_dump() , mas em um formato mais legível
para o programador, com os conteúdos alinhados e suprimindo os tipos
de dados. */
echo '<pre>';
print_r($vetor);

