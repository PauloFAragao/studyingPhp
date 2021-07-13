<?php
require_once "Reptil.php";
class Cobra extends Reptil
{
    public function alimentar()
    {
        echo "<p>Comendo roedores</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de chocalho</p>";
    }
}