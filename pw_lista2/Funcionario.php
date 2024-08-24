<?php

declare(strict_types = 1);

class Funcionario {

    protected String $nome;
    protected int $codigo;
    protected float $salarioBase;

    public function __construct(String $nome, int $codigo, float $salarioBase)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salarioBase = $salarioBase;
    }

    public function getNome(): String
    {
        return $this->nome;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }

    public function getSalarioBase(): float
    {
        return $this->salarioBase;
    }

    public function setSalarioBase(float $salarioBase): void
    {
        $this->salarioBase = $salarioBase;
    }

    public function getSalarioLiquido(): float
    {
        $inss = $salarioBase * 0.1;
        $ir = 0.0;
        if(salarioBase > 2000.0)
        {
            $ir = ($salarioBase - 2000.0) * 0.12;
        }
        return $salarioBase - $inss - $ir;
    }

    public function toString(): String
    {
        return get_class() . "\n Código: " . $this->getCodigo() .
            "\n Nome: " . $this->nome . "\n Salario base: " . $this->getSalarioBase() .
            "\n Salario líquido: " . $this->getSalarioLiquido();
    }

}


class Servente extends Funcionario {

    protected float $insalubridade = 1.05;
    
    public function __construct(String $nome, int $codigo, float $salarioBase)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salarioBase = $salarioBase * $insalubridade;
    }

}


class Motorista extends Funcionario {

    private int $nroCarteira;

    public function __construct(String $nome, int $codigo, float $salarioBase, int $nroCarteira)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salarioBase = $salarioBase;
        $this->nroCarteira = $nroCarteira;
    }

    public function setNroCarteira(int $nroCarteira): void
    {
        $this->nroCarteira = $nroCarteira;
    }

    public function getNroCarteira(): int
    {
        return $this->nroCarteira;
    }

}


class MestreDeObras extends Servente {

    private int $funcsSupervisionados;
    private float $adicional = 0.1;
    private float $salarioComAdicional;

    public function __construct(String $nome, int $codigo, float $salarioBase, int $funcsSupervisionados)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->funcsSupervisionados = $funcsSupervisionados;
        $this->salarioBase = $salarioBase;

        $salarioComAdicional = $salarioBase * $insalubridade;

        $this->salarioComAdicional = $salarioComAdicional + ($funcsSupervisionados % 10) * $adicional;
    }

    private function setFuncsSupervisionados($funcsSupervisionados): void
    {
        $this->funcsSupervisionados - $funcsSupervisionados;
    }

    private function getFuncsSupervisionados(): int
    {
        return $this->funcsSupervisionados;
    }

    private function atualizarSalario(): void
    {
        $this->salarioComAdicional = $salarioBase + (($salarioBase * $insalubridade) * (($funcsSupervisionados % 10) * $adicional));
    }

}

?>