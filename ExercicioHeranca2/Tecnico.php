<?php
require_once "Aluno.php";
final class Tecnico extends Aluno
{
    //atributos
    private $registroProfissional;

    //metodos
    public function praticar()
    {
        echo "O(A) tecnico(a): ".$this->getNome()." está praticando" ;
    }

    //gets & sets
    public function getRegistroProfissional()
    {
        return $this->registroProfissional;
    }
    public function setRegistroProfissional($value)
    {
        $this->registroProfissional = $value;
    }

}