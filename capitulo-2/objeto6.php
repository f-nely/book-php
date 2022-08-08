<?php

declare(strict_types=1);

use Produto as GlobalProduto;

class Produto
{
    private string $descricao;
    private int $estoque;
    private float $preco;

    public function __construct(string $descricao, int $estoque, float $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        print "CONSTRUÍDO: Objeto {$descricao}, estoque {$estoque}, preco {$preco}<br>\n";
    }

    public function __destruct()
    {
        print "DESTRUÍDO: Objeto {$this->descricao}, estoque {$this->estoque}, preco {$this->preco}<br>\n";
    }
}

$p1 = new Produto('Chocolate', 10, 9.50);
unset($p1);

$p2 = new Produto('Café', 100, 17.99);
unset($p2);