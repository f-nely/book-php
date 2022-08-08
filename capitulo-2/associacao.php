<?php

require_once 'classes/Fabricante.php';
require_once 'classes/Produto.php';

// criação de objetos
$p1 = new Produto('Chocolate', 10, 14.98);
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street','100120');

// associação
$p1->defineFabricante($f1);

print 'A descrição é ' . $p1->recuperaDescricao() . '<br>';
print 'O fabriante é ' . $p1->recuperaFabricante()->recuperaNome() . '<br>';
