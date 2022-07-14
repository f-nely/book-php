<?php

// Variáveis
$nome = 'Tailor';
$sobrenome = 'Otwell';
echo "{$sobrenome}, {$nome}";
echo '<br>';

/* Variáveis variantes ( variable variables ) */
$variavel = 'nome';
$$variavel = 'Maria';
echo $nome;
echo '<br>';

/* Quando uma variável é atribuída a outra, é criada uma nova área de
armazenamento na memória (exceto quando a variável representa um
objeto). */
$a = 5;
$b = $a;
$b = 10;
echo $a . '<br>';
echo $b . '<br>';

/* Para criar referência entre variáveis, ou seja, duas variáveis apontando
para a mesma região da memória, a atribuição deve ser precedida pelo
operador & . Assim, qualquer alteração em qualquer uma das variáveis
re ete na outra. */
$a = 5;
$b = &$a;
$b = 10;
echo $a . '<br>';
echo $b . '<br>';

/* Objetos são sempre copiados por referência, independentemente de
utilizarmos o operador & na operação de atribuição. */
$user = new stdClass;
$user->name = 'Diana';
$user2 = $user;
$user2->name = 'Nikita';
echo $user->name;
echo '<br>';
echo $user2->name;
echo '<br>';