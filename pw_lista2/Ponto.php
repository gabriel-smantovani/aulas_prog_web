<?php

declare(strict_types = 1);

class Ponto
{

    private int $x;
    private int $y;
    //Introduza um atributo de classe para contar o número de objetos criados
    public static int $contador = 0;

    public static function incremento()
    {
        self::$contador++;
    }

    public static function decremento()
    {
        self::$contador--;
    }

    //Crie um construtor que recebe dois parâmetros de coordenadas X e Y
    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
        
        //Faça com que o construtor atualize o contador de pontos
        self::incremento();
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
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

    //Acrescente um método de classe para retornar o valor desse atributo de contagem
    public static function exibirContagem(): String
    {
        return "Qtde de pontos: " . self::$contador;
    }

    //Acrescente um método para calcular e retornar a distância entre a instância do ponto e um outro
    //objeto Ponto qualquer
    public function calcDistPontoQualquer(): float //usado como base ponto (0,0)
    {
        return sqrt(pow(($this->x), 2) + pow(($this->y), 2));
    }

    //Acrescente um método para calcular e retornar distância entre a instância do ponto e um outro ponto
    //dado pelas coordenadas X e Y
    public function calcularDistancia(int $x2, int $y2): float
    {
        return sqrt(pow(($x2 - $this->x), 2) + pow(($y2 - $this->y), 2));
    }

}

//Acrescente um método para calcular e retornar a distância entre dois pontos, dadas as coordenadas
//X1, Y1 e X2, Y2 (como este método não utiliza nenhum atributo para fazer este cálculo, ele pode ser
//criado como um método de classe)
function calcDist2PontosNPD(int $x1, int $y1, int $x2, int $y2): float
{
    return sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
}

$ponto1 = new Ponto(1,3);
$ponto2 = new Ponto(1,3);
$ponto3 = new Ponto(1,3);

echo $ponto1::exibirContagem();


?>