<?php

//POLIMORFISMO

interface Forma {   //interface é o contrato, nenhum método tem corpo

    public function area(); //assinatura do método, qualquer classe que implementá-la deve colocar um corpo para este método

}

class Retangulo implements Forma {

    private $altura;
    private $comprimento;

    public function area() {
        return $this->altura * $this->comprimento;
    }

}

//classes abstratas têm ao menos um método sem corpo

?>