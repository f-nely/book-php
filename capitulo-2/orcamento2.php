<?php

require_once 'classes/Orcamento.php';
require_once 'classes/OrcavelInterface.php';
require_once 'classes/Produto2.php';
require_once 'classes/Servico.php';

$o = new Orcamento;
$o->adiciona(new Produto2('Máquina de café', 10, 299), 1);
$o->adiciona(new Produto2('Barbeador elétrico', 10, 170), 1);
$o->adiciona(new Produto2('Barra de chocolate', 10, 7), 3);
$o->adiciona(new Servico('Corte de grama', 20), 1);
$o->adiciona(new Servico('Corte de barba', 20), 1);
$o->adiciona(new Servico('Limpeza do apto', 50), 1);
print $o->calculaTotal();