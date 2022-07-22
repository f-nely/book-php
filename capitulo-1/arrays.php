<?php

// criando array
$cores = ['vermelho', 'azul', 'verde', 'amarelo'];
var_dump($cores);

/* 
outra forma de criar array é simplesmente adicionando-lhe 
valores com a seguinte sintaxe */
$nomes[] = 'maria';
$nomes[] = 'joão';
$nomes[] = 'carlos';
$nomes[] = 'josé';
var_dump($nomes);

/*
funções para manipulação de arrays
array_unshift
Adiciona elemento(s) ao início de um array.
int array_unshift (array &$array , mixed $var [, mixed $... ])

array_push
Adiciona elemento(s) ao nal de um array. Tem o mesmo efeito que
$array[] = $valor.
int array_push (array &$array , mixed $var [, mixed $... ])

array_shift
Remove um elemento do início de um array.
mixed array_shift (array &$array)

array_pop
Remove um valor do nal de um array.
mixed array_pop (array &$array)

array_reverse
Recebe um array e retorna-o na ordem inversa.
array array_reverse (array $array [, bool $preserve_keys ])

array_merge
Mescla dois ou mais arrays. Um array é adicionado ao nal do outro. O
resultado é um novo array. Se ambos os arrays tiverem conteúdo
indexado pela mesma chave, o segundo irá se sobrepor ao primeiro.
array array_merge (array nome_array1, array nome_array2 [, array ...])

array_keys
Retorna as chaves (índices) de um array. Se o segundo parâmetro for
indicado, a função retornará apenas índices que apontam para um
conteúdo igual ao parâmetro.
array array_keys ( array $input [, mixed $search_value [, bool
$strict ]])

array_values
Retorna somente os valores de um array, ignorando suas chaves.
array array_values (array $input)

count
Retorna a quantidade de elementos de um array.
int count (array nome_array)

in_array
Verica se um array contém um determinado valor.
bool in_array (mixed $needle , array $haystack [, bool $strict ])

sort
Ordena um array pelo seu valor, sem manter a associação de índices.
Para ordem reversa, utilize rsort().
bool sort (array &$array [, int $sort_flags ])

asort
Ordena um array pelo seu valor, mantendo a associação de índices. Para
ordenar de forma reversa, use arsort().
bool asort (array &$array [, int $sort_flags ])

Ordena um array pelos seus índices. Para ordem reversa, utilize krsort().
int ksort (array &$array [, int $sort_flags ])
*/

$colors = ['green', 'blue', 'red'];
array_unshift($colors, 'ciano');
array_push($colors, 'black');
var_dump($colors);

$cores = ['ciano', 'verde', 'azul', 'vermelho', 'amarelo'];
array_shift($cores);
array_pop($cores);
var_dump($cores);

$a = [];
$a[0] = 'verde';
$a[1] = 'amarelo';
$a[2] = 'vermelho';
$a[3] = 'azul';
$result = array_reverse($a);
var_dump($result);

$car1 = ['Amarok', 'S10'];
$car2 = ['Jetta', 'Jeep Compass'];
$r = array_merge($car1, $car2);
var_dump($r);

$dados = [
    'cor' => 'vermelho',
    'volume' => 5,
    'animal'=>'cachorro',
];

echo '<pre>';
print_r(array_keys($dados));
print_r(array_values($dados));
echo 'Quantidade: ' . count($dados) . '<br>';

$foods = ['refrigerante', 'cerveja', 'vodca', 'suco natural'];
if (in_array('suco natural', $foods)) {
    echo 'suco natural encontrado';
}

$drinks = ['refrigerante', 'cerveja', 'vodca', 'suco natural'];
sort($drinks);
print_r($drinks);

$c = [];
$c[0] = 'verde';
$c[1] = 'amarelo';
$c[2] = 'vermelho';
$c[3] = 'azul';
asort($c);
print_r($c);

$carro['potência'] = '1.0';
$carro['cor'] = 'branco';
$carro['modelo'] = 'celta';
$carro['opcionais'] = 'ar quente';
ksort($carro);
print_r($carro);