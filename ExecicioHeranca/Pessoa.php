<?php
class Pessoa
{
    //atributos
    private $nome;
    private $idade;
    private $sexo;
    
    //metodos
    public function fazerAniversario()
    {
        $this->setIdade( $this->getIdade() + 1 );
    }

    //gets & sets
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($value)
    {
        $this->nome = $value;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($value)
    {
        $this->idade = $value;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($value)
    {
        $this->sexo = $value;
    }

}