<?php
require_once'Controlador.php';
class ControleRemoto implements Controlador
{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;

    //construtor
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    //metodos implementados de controlador
    public function ligar()
    {
        $this->setLigado(true);
    }
    public function desligar()
    {
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo"<p>-----Menu-----</p>"; 
        echo "<br>Está ligado: ". ($this->getLigado()? "Sim": "Não");
        echo "<br>Está tocando: ". ($this->getTocando()? "Sim": "Não");
        echo "<br>Volume: ".$this->getVolume()." ";
        for($i=0; $i <= $this->getVolume(); $i+=5)
        {
            echo"|";
        }
        echo "<br>";
    }
    public function fecharMenu()
    {
        echo "Menu fechado";
    }
    public function maisVolume()
    {
        if($this->getLigado())
            $this->setVolume($this->getVolume()+5);
    }
    public function menosVolume()
    {
        if($this->getLigado())
            $this->setVolume($this->getVolume()-5);
    }
    public function ligarMudo()
    {
        if($this->getLigado() && $this->getVolume() > 0)
            $this->setVolume(0);
    }
    public function desligarMudo()
    {
        if($this->getLigado() && $this->getVolume() == 0)
            $this->setVolume(50);
    }
    public function play()
    {
        if($this->getLigado() && !($this->getTocando()))
            $this->setTocando(true);
    }
    public function pause()
    {
        if($this->getLigado() && $this->getTocando())
            $this->setTocando(false);
    }

    //gets e sets
    private function getVolume()
    {
        return $this->volume;
    }
    private function setVolume($value)
    {
        $this->volume = $value;
    }

    private function getLigado()
    {
        return $this->ligado;
    }
    private function setLigado($value)
    {
        $this->ligado = $value;
    }

    private function getTocando()
    {
        return $this->tocando;
    }
    private function setTocando($value)
    {
        $this->tocando = $value;
    }
}