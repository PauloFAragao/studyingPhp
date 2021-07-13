<?php
require_once "Animal.php";
class Peixe extends Animal
{
    //atributos
    private $corEscama;

    //metodos
    public function soltarBolhas()
    {
        echo "<p>Soltou uma bolha</p>";
    }

    public function locomover()
    {
        echo "<p>Nadando</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo algas</p>";
    }

    public function emitirSom()
    {
        echo "<p>Peixe não faz som</p>";
    }

    //gets & sets
    public function getCorEscama()
    {
        return $this->corEscama;
    }
    public function setCorEscama($value)
    {
        $this->corEscama = $value;
    }
}