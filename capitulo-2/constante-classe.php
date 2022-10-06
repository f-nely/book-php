<?php

class Pessoa
{
    const GENEREOS = ['M'=>'Masculino', 'F'=> 'Feminino'];

    public function __construct(
        private string $nome,
        private string $genero
    )
    {}

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaNomeGenero(): string
    {
        return self::GENEREOS[$this->genero];
    }
}

$p1 = new Pessoa('Diana', 'F');
$p2 = new Pessoa('Tailor', 'M');

echo 'Nome: ' . $p1->recuperaNome() . '<br>';
echo 'Gênero: ' . $p1->recuperaNomeGenero() . '<br>';

echo 'Nome: ' . $p2->recuperaNome() . '<br>';
echo 'Gênero: ' . $p2->recuperaNomeGenero() . '<br>';

echo '<pre>';
print_r(Pessoa::GENEREOS);