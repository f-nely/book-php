<?php

use Pessoa as GlobalPessoa;

class Pessoa
{
    // protected $nome;

    // public function __construct($nome)
    // {
    //     $this->nome = $nome;    
    // }

    public function __construct(protected string $nome)
    {}
}

class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function contrata(string $cargo, float $salario)
    {
        if (is_numeric($salario) && $salario > 0) {
            $this->cargo = $cargo;
            $this->salario = $salario;
        }
    }

    public function recuperaSalario()
    {
        return $this->salario;
    }

    public function recuperaInfo()
    {
        return "Nome: {$this->nome}, Salário: {$this->salario}";
    }
}

$f1 = new Funcionario('Diana');
$f1->contrata('Desenvolvedora PHP', 8500);
print $f1->recuperaInfo();
// print $f1->recuperaSalario();