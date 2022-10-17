<?php

class Funcionario
{
    public string $nome;
    public float $salario;
    public string $departamento;
}

$func1 = new Funcionario;
$func1->nome = 'José da Silva';
$func1->salario = 2000;
$func1->departamento = 'Financeiro';

/*
    get_object_vars
    
    Retorna um vetor com os conteúdos das propriedades públicas de um
    objeto. São valores dinâmicos que se alteram de acordo com o ciclo de
    vida do objeto.
*/
echo '<pre>';
print_r(get_object_vars($func1));
