<?php
require_once "Mamifero.php";
class Canguru extends Mamifero
{
    //metodos
    public function locomover()
    {
        echo "<p>Saltando</p>";
    }

    public function usarBolsa()
    {
        echo "<p>Colocando o filhote na bolsa</p>";
    }

    public function decerOCacete()
    {
        echo "<p>Baixou a porrada em algum troxa!</p>";
    }
}