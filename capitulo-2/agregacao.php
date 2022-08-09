<?php

use App\Classes\Cesta;
use App\Classes\Product;

require_once 'classes/Cesta.php';
require_once 'classes/Product.php';

$c1 = new Cesta;

// agregação dos produtos
$c1->addItem($p1 = new Product('Chocolate', 10, 5));
$c1->addItem($p2 = new Product('Café', 100, 21.90));
$c1->addItem($p3 = new Product('Mostarda', 50, 3));

foreach ($c1->getItens() as $item) {
    print 'Item: ' . $item->getDescription() . '<br>';
}
