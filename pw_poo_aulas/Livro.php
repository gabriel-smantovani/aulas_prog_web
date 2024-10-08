<?php

//CLASSES E OBJETOS

class Livro {

    private $titulo;
    private $autor;
    private $ano;

    public function __construct($titulo, $autor, $ano) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->setAno($ano);
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAno($ano) {
        if($ano < 1900)
            $ano = 1900;
        $this->ano = $ano;
    }

    public function getAno() {
        return $this->ano;
    }

}

$obj = new Livro("O livro", "Ana", 2024); //exibir objetos, vetores e afins

var_dump($obj);

?>