<?php

// Operadores lógicos são usados para combinar expressões lógicas entre si, agrupando testes condicionais

$vai_chover = true;
$esta_frio = true;

if ($vai_chover && $esta_frio) {
    echo 'Não vou sair de casa<br>';
}

$vai_chover = false;
$esta_frio = true;

if ($vai_chover xor $esta_frio) {
    echo 'Vou pensar duas vezes antes de sair';
}
