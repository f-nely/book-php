<?php

class Fabricante
{
    private string $nome;
    private string $endereco;
    private string $documento;

    public function __construct(string $nome, string $endereco, string $documento)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->documento = $documento;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
}