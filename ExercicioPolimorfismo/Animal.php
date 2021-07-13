<?php
abstract class Animal
{
    //atributos
    protected $peso;
    protected $idade;
    protected $membros;

    //metodos
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();

    //gets & sets
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($value)
    {
        $this->peso = $value;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($value)
    {
        $this->idade = $value;
    }

    public function getMembros()
    {
        return $this->membros;
    }
    public function setMembros($value)
    {
        $this->membros = $value;
    }
}