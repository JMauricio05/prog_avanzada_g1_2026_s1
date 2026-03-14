<?php

abstract class Figura
{
    public abstract function area();

    public function getAreaMsg()
    {
        return "\nEl area del cuadrado es de " . $this->area();
    }
}

interface IFigura
{
    public function toString();
}

class Cuadrado extends Figura implements IFigura
{
    private $arista;

    public function __construct($arista)
    {
        $this->arista = $arista;
    }

    public function setArista($value)
    {
        $this->arista = $value;
    }

    public function getArista()
    {
        return $this->arista;
    }

    public function area()
    {
        return pow($this->arista, 2);
    }

    public function toString()
    {
        return "\nEl cuadrado es de " . $this->arista;
    }
}


class Rectangulo extends Figura implements IFigura
{
    private $base = 0;
    private $altura = 0;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area()
    {
        return $this->base * $this->altura;
    }

    public function toString()
    {
        return "\nEl rectangulo es de " . $this->base . "x" . $this->altura;
    }
}


$cuadrado1 = new Cuadrado(25);
echo "\nEl cuadrado es de " . $cuadrado1->getArista();
echo "\nEl area del cuadrado es de " . $cuadrado1->area();
echo $cuadrado1->toString();
echo $cuadrado1->getAreaMsg();

$rectangulo1 = new Rectangulo(10, 15);
echo $rectangulo1->toString();
echo $rectangulo1->getAreaMsg();