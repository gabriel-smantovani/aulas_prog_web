<?php

namespace POO\dados;     //usar contexto e não nome das classes

class Usuario {
    
    public $email = "g@g.com";

    public function exibirEmail() {
        echo $this->email;
    }

}

?>