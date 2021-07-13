<?php
require_once "Aluno.php";
final class Bolsista extends Aluno
{
    //atributos
    private $bolsa;
    //metodos
    public function renovarBolsa()
    {
        echo "<p>Bolsa renovada!</p>";
    }
    public function pagarMensalidade()
    {
        echo "<p>Pagando a mensalidade do(a) aluno(a) (Bolsista desconto de: ".$this->bolsa."): ".$this->getNome()."</p>";
    }

    //gets & sets
    
    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($value)
    {
        $this->bolsa = $value;
    }
}