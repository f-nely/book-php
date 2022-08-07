<?php

class Produto
{
    public string $descricao;
    public int $estoque;
    public float $preco;

    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) && $unidades >= 0) {
            $this->estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) && $unidades >= 0) {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percetual)
    {
        if (is_numeric($percetual) && $percetual >= 0) {
            $this->preco *= (1 + ($percetual
             / 100));
        }
    }
}

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque = 10;
$p1->preco = 8;

print "O estoque de {$p1->descricao} é {$p1->estoque} <br>\n";
print "O preço de {$p1->descricao} é {$p1->preco} <br>\n";

$p1->aumentarEstoque(10);
$p1->diminuirEstoque(5);
$p1->reajustarPreco(50);

print "O estoque de {$p1->descricao} é {$p1->estoque} <br>\n";
print "O preço de {$p1->descricao} é {$p1->preco} <br>\n";