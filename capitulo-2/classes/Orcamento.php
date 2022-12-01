<?php

class Orcamento
{
    private $itens;

    public function adiciona(OrcavelInterface $produto, int $qtd)
    {
        $this->itens[] = array($qtd, $produto);
    }

    public function calculaTotal()
    {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += ($item[0] * $item[1]->recuperaPreco());
        }
        return $total;
    }
}