<?php

class Pessoa
{
    public string $nome;
    public string $endereco;
    public string $nascimento;
}

$p1 = new Pessoa;
$p1->nome = 'Taylor';
$p1->endereco = 'Utah';
$p1->nascimento = '1985-12-03';
$p1->telefone = '(51) 99999-0000'; // definida em tempo de execução
echo '<pre>';
print_r($p1);

