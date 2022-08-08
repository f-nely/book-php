<?php

declare(strict_types=1);

class Product
{
    private string $description;
    private int $reserve; 
    private float $price; 
    
    public function __construct(string $description, int $reserve, float $price)
    {
        $this->description = $description;
        if (is_numeric($reserve) && $reserve > 0) {
            $this->reserve = $reserve;
        }

        if (is_numeric($price) && $price > 0) {
            $this->price = $price;
        }
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getReserve(): int
    {
        return $this->reserve;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

$p1 = new Product('Chocolate', 10, 8.5);

print 'Descrição: ' . $p1->getDescription() . '<br>';
print 'Estoque: ' . $p1->getReserve() . '<br>';
print 'Preço: ' . $p1->getPrice() . '<br>';