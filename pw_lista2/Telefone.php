<?php

declare(strict_types = 1);

abstract class Telefone
{

    protected int $ddd;
    protected int $nroTelefone;

    abstract public function calculaCusto(int $tempo): float;

    public function setDDD(int $ddd): void
    {
        $this->ddd = $ddd;
    }

    public function getDDD(): int
    {
        return $this->ddd;
    }

    public function setNroTelefone(int $nroTelefone): void
    {
        $this->nroTelefone = $nroTelefone;
    }

    public function getNroTelefone(): int
    {
        return $this->nroTelefone;
    }

}


class Fixo extends Telefone
{

    private float $custoMinuto;

    public function __construct(int $ddd, int $nroTelefone, float $custoMinuto)
    {
        $this->ddd = $ddd;
        $this->nroTelefone = $nroTelefone;
        $this->custoMinuto = $custoMinuto;
    }

    public function calculaCusto(int $tempo): float
    {
        return $tempo * $custoMinuto; 
    }

    public function setCustoMinuto(float $custoMinuto): void
    {
        $this->custoMinuto = $custoMinuto;
    }

    public function getCustoMinuto(): float
    {
        return $this->custoMinuto;
    }

}


abstract class Celular extends Telefone
{

    protected float $custoMinuto;
    protected String $nomeOperadora;

    abstract public function calculaCusto(int $tempo): float;

    public function setCustoMinuto(float $custoMinuto): void
    {
        $this->custoMinuto = $custoMinuto;
    }

    public function getCustoMinuto(): float
    {
        return $this->custoMinuto;
    }

    public function setNomeOperadora(float $nomeOperadora): void
    {
        $this->nomeOperadora = $nomeOperadora;
    }

    public function getNomeOperadora(): float
    {
        return $this->nomeOperadora;
    }

}


class PrePago extends Celular
{

    private float $acrescimo = 1.4;

    public function __construct(int $ddd, int $nroTelefone, float $custoMinuto, $nomeOperadora)
    {
        $this->ddd = $ddd;
        $this->nroTelefone = $nroTelefone;
        $this->custoMinuto = $custoMinuto;
        $this->nomeOperadora = $nomeOperadora;
    }

    public function setAcrescimo(float $acrescimo): void
    {
        $this->acrescimo = $acrescimo;
    }

    public function getAcrescimo(): float
    {
        return $this->acrescimo;
    }
    
    public function calculaCusto(int $tempo): float
    {
        return $tempo * $custoMinuto * $acrescimo; 
    }

}


class PosPago extends Celular
{

    private float $desconto = 0.1;

    public function __construct(int $ddd, int $nroTelefone, float $custoMinuto, $nomeOperadora)
    {
        $this->ddd = $ddd;
        $this->nroTelefone = $nroTelefone;
        $this->custoMinuto = $custoMinuto;
        $this->nomeOperadora = $nomeOperadora;
    }

    public function setAcrescimo(float $acrescimo): void
    {
        $this->acrescimo = $acrescimo;
    }

    public function getAcrescimo(): float
    {
        return $this->acrescimo;
    }
    
    public function calculaCusto(int $tempo): float
    {
        return $tempo * $custoMinuto * (1 - $desconto); 
    }

}

?>