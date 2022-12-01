<?php

require_once 'classes/Orcamento.php';
require_once 'classes/Produto2.php';

$o = new Orcamento;
$o->adiciona(new Produto2('Máquina de café', 10, 299), 1);
$o->adiciona(new Produto2('Barbeador elétrico', 10, 170), 1);
$o->adiciona(new Produto2('Barra de chocolate', 10, 7), 3);

print $o->calculaTotal();