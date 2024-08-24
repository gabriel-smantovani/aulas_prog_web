<?php

declare(strict_types = 1);
require("Contador.php");

class Ponto
{

    private int $x;
    private int $y;

    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
        
        Contador::incremento();
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function deslocar(int $dx, int $dy): void
    {
        $this->x += $dx;
        $this->y += $dy; 
    }

    public function toString(): String
    {
        return "(" . $this->x . ", " . $this->y . ")";
    }

    public function exibirContagem(): String
    {
        return "Qtde de pontos: " . Contador::$contador;
    }

    public function calcularDistanciaDoInicio(): float  //referência ponto (0, 0)
    {
        return sqrt(pow(($this->x), 2) + pow(($this->y), 2));
    }

    public function calcularDistancia($x2, $y2): float  //referência ponto dado pelo usuário (x2, y2);
    {
        return sqrt(pow(($x2 - $this->x), 2) + pow(($y2 - $this->y), 2));
    }

}

$ponto1 = new Ponto(1, 1);
$ponto2 = new Ponto(3, 3);
$ponto3 = new Ponto(5, 5);
$ponto4 = new Ponto(3, 1);
$ponto5 = new Ponto(2, 3);
$ponto6 = new Ponto(5, 5);

function calcularDistanciaDoisPontosAleatorios(int $x1, int $y1, int $x2, int $y2): float
{
    return sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
}

echo $ponto1->exibirContagem();

?>