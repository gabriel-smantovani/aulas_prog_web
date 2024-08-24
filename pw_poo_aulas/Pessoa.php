<?php

declare(strict_types = 1); //você é obrigado a definir os tipos primitivos dos atributos e seus métodos

class Pessoa {

    private string $nome;
    private string $email;
    private int $idade;
    private float $salario;

    // public function __construct ---------------------- não muda

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

}

$pessoa = new Pessoa();
$pessoa->setNome("Gabriel");

var_dump($pessoa);

?>