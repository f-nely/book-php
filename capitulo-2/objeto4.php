<?php

class Product
{
    private string $description;
    private float $price; 
    private int $reserve; // estoque

    public function setDescription(string $description): void
    {
        if (is_string($description)) {
            $this->description = $description;
        }
    }    

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setReserve($reserve): void
    {
        if (is_numeric($reserve) && $reserve > 0) {
            $this->reserve = $reserve;
        }
    }

    public function getReserve(): int
    {
        return $this->reserve;
    }
}

$p1 = new Product;

$p1->setDescription('Chocolate');
$p1->setReserve(10);

print 'Descrição: ' . $p1->getDescription() . '<br>';
print 'Estoque: ' . $p1->getReserve() . '<br>';