<?php
require_once"Pessoa.php";
class Funcionario extends Pessoa
{
    //atributos
    private $setor;
    private $trabalhando;

    //metodos
    public function mudarTrabalho()
    {
        $this->setTrabalhando( !($this->getTrabalhando()) );
    }

    //gets & sets
    public function getSetor()
    {
        return $this->setor;
    }
    public function setSetor($value)
    {
        $this->setor = $value;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }
    public function setTrabalhando($value)
    {
        $this->trabalhando = $value;
    }
}