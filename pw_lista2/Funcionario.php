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
        $this->salarioBase = (float)$salarioBase;
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

    protected float $insalubridade = 0.05;
    protected float $salarioIncrementado;
    
    public function __construct(String $nome, int $codigo, float $salarioBase)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salarioBase = $salarioBase;
        setSalarioIncrementado();
    }

    public function getInsalubridade(): float
    {
        return $this->insalubridade;
    }

    public function setInsalubridade($insalubridade): void
    {
        $this->insalubridade = $insalubridade;
    }

    public function getSalarioIncrementado(): float
    {
        return $this->salarioIncrementado;
    }

    public function setSalarioIncrementado(): void
    {
        $this->salarioIncrementado = $this->salarioBase + $this->salarioBase * $this->insalubridade;
    }

    public function getSalarioLiquido(): float
    {
        $inss = $salarioIncrementado * 0.1;
        $ir = 0.0;
        if($salarioIncrementado > 2000.0)
        {
            $ir = ($salarioIncrementado - 2000.0) * 0.12;
        }
        return $salarioIncrementado - $inss - $ir;
    }

    public function toString(): String
    {
        return get_class() . "\n Código: " . $this->getCodigo() .
            "\n Nome: " . $this->nome . "\n Salario base: " . $this->getSalarioBase() .
            "\n Salário incrementado: " . $this->getSalarioIncrementado() .
            "\n Salario líquido: " . $this->getSalarioLiquido();
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

    public function getNroCarteira(): int
    {
        return $this->nroCarteira;
    }
    
    public function setNroCarteira(int $nroCarteira): void
    {
        $this->nroCarteira = $nroCarteira;
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
        setSalarioIncrementado();

        $salarioComAdicional = $salarioBase * $insalubridade;

        $this->salarioComAdicional = $salarioComAdicional + ($funcsSupervisionados % 10) * $adicional;
    }

    public function getFuncsSupervisionados(): int
    {
        return $this->funcsSupervisionados;
    }

    public function setFuncsSupervisionados($funcsSupervisionados): void
    {
        $this->funcsSupervisionados = $funcsSupervisionados;
    }

    public function getAdicional(): float
    {
        return $this->adicional;
    }

    public function setAdicional($adicional): void
    {
        $this->adicional = $adicional;
    }

    public function setSalarioIncrementado(): void
    {
        $calcSalario = $this->salarioBase + $this->salarioBase * $this->insalubridade;
        $calcSalario = $calcSalario + $calcSalario * ($this->funcsSupervisionados % 10) * $this->adicional;
        
        $this->salarioIncrementado = $calcSalario;
    }

}

?>