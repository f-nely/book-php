<?php

class Software
{
    private string $nome;
    private int $id;
    public static $contador;

    public function __construct(string $nome)
    {
        self::$contador++;
        $this->id = self::$contador;
        $this->nome = $nome;
        echo "Software {$this->id} - {$this->nome} <br>";
    }
}

new Software('Dia');
new Software('Gimp');
new Software('Gnumeric');

echo 'Quantidade criada = ' . Software::$contador;