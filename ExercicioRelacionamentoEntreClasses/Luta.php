<?php
require_once'Lutador.php';
require_once'Iluta.php';
class Luta implements Iluta
{
    //atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //constutor
    public function __construct()//inicializando atributos
    {
        $this->rounds=0;
        $this->aprovada=false;
    }

    //metodos
    public function marcarLuta($lutador1, $lutador2)
    {
        if( $lutador1->getCategoria() === $lutador2->getCategoria() 
            && $lutador1 != $lutador2 )
        {
            $this->setAprovada(true);
            $this->setDesafiado($lutador1);
            $this->setDesafiante($lutador2);

           //echo "Luta entre: $this->setDesafiado->getNome() e $this->setDesafiante->getNome() marcada com sucesso!";
        }
        else 
        {
            $this->setAprovada(false);
            $this->setDesafiado(NULL);
            $this->setDesafiante(NULL);

           //echo "Essa luta não pode acontecer";
        }
    }

    public function lutar()
    {
        if($this->aprovada)
        {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            if($vencedor == 1)//desafiado vence
            {
                echo "<p>A luta terminou com a vitoria do desafiado: ".$this->desafiado->getNome()."!</p>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
            }
            else if($vencedor == 2)//desafiante vence
            {
                echo "<p>A luta terminou com a vitoria do desafiante: ".$this->desafiante->getNome()."!</p>";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
            }
            else//empate
            {
                echo "<p>A luta terminou Empatada!</p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
            }


        }
        else
        {
            echo "<p>A luta não pode acontecer</p>";
        }
    }

    //gets & sets
    public function getDesafiado()
    {
        return $this->desafiado;
    }
    public function setDesafiado($value)
    {
        $this->desafiado = $value;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }
    public function setDesafiante($value)
    {
        $this->desafiante = $value;
    }

    public function getRounds()
    {
        return $this->rounds;
    }
    public function setRounds($value)
    {
        $this->rounds = $value;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }
    public function setAprovada($value)
    {
        $this->aprovada = $value;
    }
}