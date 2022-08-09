<?php

namespace App\Classes;

class Product
{
    private array $characteristics;

    public function __construct(
        private string $description,
        private int $stock,
        private float $price,
    )
    {}

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function addCharacteristics(string $name, string $value)
    {
        $this->characteristics[] = new Characteristics($name, $value);
    }

    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }
}