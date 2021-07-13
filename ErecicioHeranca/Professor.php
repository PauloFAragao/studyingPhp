<?php
require_once"Pessoa.php";
class Professor extends Pessoa
{
    //atributos
    private $especialidade;
    private $salario;

    //metodos
    public function receberAumento($value)
    {
        $this->setSalario($this->getSalario()+$value);
    }

    //gets & sets
    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function setEspecialidade($value)
    {
        $this->especialidade = $value;
    }

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($value)
    {
        $this->salario = $value;
    }
}