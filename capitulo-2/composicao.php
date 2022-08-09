<?php

use App\Classes\Product;

require_once 'classes/Product.php';
require_once 'classes/Characteristics.php';

$p1 = new Product('Chocolate', 10, 7);

// composição
$p1->addCharacteristics('Cor', 'Branco');
$p1->addCharacteristics('Peso', '2.6 kg');
$p1->addCharacteristics('Marca', 'Nestlé');

print 'Produto: ' . $p1->getDescription() . '<br>';

foreach ($p1->getCharacteristics() as $c) {
    print ' Característica: ' . $c->getName() . ' - ' . $c->getValue() . '<br>';
}