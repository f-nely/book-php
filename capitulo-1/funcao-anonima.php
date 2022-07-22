<?php

// No PHP, funções anônimas são instâncias de uma classe interna chamada Closure

$remove_acento = function ($str) {
    $a = ['À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê',
    'Ì', 'Í', 'Ò', 'Ó', 'Ô', 'Õ', 'Ù', 'Ú', 'à',
    'á', 'â', 'ã', 'ç', 'è', 'é', 'ê', 'í', 'î',
    'ò', 'ó', 'ô', 'õ', 'ù', 'ú', 'û', 'ü'];

    $b = ['A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E',
    'I', 'I', 'O', 'O', 'O', 'O', 'U', 'U', 'a',
    'a', 'a', 'a', 'c', 'e', 'e', 'e', 'i', 'i',
    'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u'];
    return str_replace($a, $b, $str);
};

echo $remove_acento('José da Conceição');
echo '<br>';
$palavras = ['José da Conceição', 'Jéferson Araújo', 'Félix Júnior', 'Ênio Müller', 'Ângelo Ônix'];

$result = array_map($remove_acento, $palavras);
echo '<pre>';
print_r($result);
echo '</pre>';