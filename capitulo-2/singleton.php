<?php

require_once 'classes/Preferencias.php';

// obtém uma instância
$p1 = Preferencias::getInstance();
echo 'A linguagem é: ' . $p1->getData('language') . '<br>';

$p1->setData('language', 'pt-br');
echo 'A linguagem é: ' . $p1->getData('language') . '<br>';

// obtém a mesma instância
$p2 = Preferencias::getInstance();
echo 'A linguagem é: ' . $p2->getData('language') . '<br>';

// Descomentar para gravar o valor
$p1->save();