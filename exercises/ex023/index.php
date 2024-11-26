<?php
class Circulo
{
    protected float $raio;
    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }

    public function calculaArea(): float
    {
        return 3.14 * ($this->raio**2);
    }

    public function calculaPeimetro(): float
    {
        return 2 * 3.14 * $this->raio;
    }
}

$circulo = new Circulo(15);
echo $circulo->calculaArea();
echo PHP_EOL;
echo $circulo->calculaPeimetro();



