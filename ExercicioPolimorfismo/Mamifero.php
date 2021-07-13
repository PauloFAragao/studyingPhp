<?php
require_once "Animal.php";
class Mamifero extends Animal
{
    //atributos
    private $corPelo;

    //metodos
    public function locomover()
    {
        echo "<p>Correndo</p>";
    }

    public function alimentar()
    {
        echo "<p>Alimentando com mamadeira</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de mamifero</p>";
    }

    //gets & sets
    public function getCorPelo()
    {
        return $this->corPelo;
    }
    public function setCorPelo($value)
    {
        $this->corPelo = $value;
    }
}