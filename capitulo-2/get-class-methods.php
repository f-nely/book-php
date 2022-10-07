<?php

class Funcionario
{
    public function defineSalario(){}
    public function recuperaSalario(){}
    public function defineNome(){}
    public function recuperaNome(){}
}

/*
    get_class_methods
    Retorna um vetor com os nomes dos métodos de uma determinada classe.
*/
echo '<pre>';
print_r(get_class_methods('Funcionario'));