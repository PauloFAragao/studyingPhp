<?php
require_once "Pessoa.php";
class Aluno extends Pessoa
{
    //atributos
    private $matricula;
    private $curso;
    //metodos
    public function pagarMensalidade()
    {
        echo "<p>Pagando a mensalidade do(a) aluno(a): ".$this->getNome()."</p>";
    }

    //gets & sets
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($value)
    {
        $this->matricula = $value;
    }

    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($value)
    {
        $this->curso = $value;
    }
}