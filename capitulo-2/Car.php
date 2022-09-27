<?php

class Car
{
    public $marca;
    public $cor;


	public function getMarca(): mixed
	{
		return $this->marca;
	}

	public function setMarca($marca): void
	{
		$this->marca = $marca;
	}

	public function getCor(): mixed
	{
		return $this->cor;
	}

	public function setCor($cor): void
	{
		$this->cor = $cor;
	}
}