<?php

//HERANÇA

abstract class Animal {   //não pode ser instanciada e precisa que seu método sem corpo seja usado em todas as classes que a extendem

    protected $nome;    //protected permite acessar em classes que extendem a classe em questão
    protected $raca;

    abstract public function fazerBarulho();

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
    }

    public function getRaca() {
        return $this->raca;
    }

}


class Cachorro extends Animal {

    private $pelagem;

    public function setPelagem($pelagem) {
        $this->pelagem = $pelagem;
    }

    public function getPelagem() {
        return $this->pelagem;
    }

    public function fazerBarulho() {
        return 'Au au!';
    }

}

?>