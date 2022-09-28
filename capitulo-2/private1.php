<?php

use Pessoa as GlobalPessoa;

class Pessoa
{
    private string $nome;
    private string $endereco;
    private string $nascimento;

    public function __construct(string $nome, string $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function defineNascimento(string $nascimento): bool
    {
        $partes = explode('-', $nascimento);
        if (count($partes) == 3) {
            if (checkdate($partes[1], $partes[2], $partes[0])) {
                $this->nascimento = $nascimento;
                return true;
            }
            return false;
        }
        return false;
    }

    public function recuperaNascimento(): string
    {
        return $this->nascimento;
    }
}

$p1 = new Pessoa('Anne', 'Salt Lake City UT 84103-3816 USA');

if ($p1->defineNascimento('01 de Maio de 2015')) {
    print "Atribuiu 01 de Maio de 2015<br>";
} else {
    print "Não atribuiu 01 de Maio de 2015<br>";
}

if ($p1->defineNascimento('2015-12-30')) {
    print "Atribuiu 2015-12-30<br>";
} else {
    print "Não atribuiu 2015-12-30<br>";
}

echo $p1->recuperaNascimento();