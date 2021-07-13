<?php
require_once "Animal.php";
class Ave extends Animal
{
    //atributos
    private $corPena;

    //metodos
    public function FazerNinho()
    {
        echo "<p>Construindo um ninho</p>";
    }

    public function locomover()
    {
        echo "<p>Voando</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de ave</p>";
    }

    //gets & sets
    public function getCorPena()
    {
        return $this->corPena;
    }
    public function setCorPena($value)
    {
        $this->corPena = $value;
    }
}