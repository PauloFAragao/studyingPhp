<?php
require_once "Animal.php";
class Reptil extends Animal
{
    //atributos
    private $corEscama;

    //metodos
    public function locomover()
    {
        echo "<p>Rastejando</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de reptil</p>";
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