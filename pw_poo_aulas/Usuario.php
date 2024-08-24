<?php

namespace POO;    //usar contexto e não nome das classes

class Usuario {

    private $nome = "João";

    public function exibirNome() {
        echo $this->nome;
    }

}

?>