<?php
require_once'Ilutador.php';
class Lutador implements Ilutador
{
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //construtor
    public function __construct( $nome,
                                 $nacionalidade,
                                 $idade, $altura, $peso,
                                 $vitorias, $derrotas,
                                 $empates )
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
        $this->setCategoria();
    }

    //metodos
    public function apresentar()//faz a apresentação do lutador
    {
        echo "<p>";
        echo "-Chegou a hora! O Lutador $this->nome";
        echo " diretamente de: $this->nacionalidade";
        echo " tem ".$this->idade. " anos e pesa ". $this->peso;
        echo " com ".$this->altura. " de altura";
        echo " ganhou: ". $this->vitorias. "vezes,";
        echo " perdeu: ". $this->derrotas. "vezes,";
        echo " empatou: ". $this->empates. "vezes,";
        echo "</p>";
    }
    public function status()//dá uma visão geral do lutador
    {
        echo "<p>";
        echo "<br>$this->nome";
        echo "<br>é um peso: " . $this->categoria;
        echo "<br>". $this->vitorias. " vitorias";
        echo "<br>". $this->derrotas. " derrotas";
        echo "<br>". $this->empates. " empates";
        echo "</p>";
    }
    public function ganharLuta()
    {
        $this->setVitorias( $this->getVitorias() + 1 );
    }
    public function perderLuta()
    {
        $this->setDerrotas( $this->getDerrotas() + 1 );
    }
    public function empatarLuta()
    {
        $this->setEmpates( $this->getEmpates() + 1 );
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

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($value)
    {
        $this->nacionalidade = $value;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($value)
    {
        $this->idade = $value;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($value)
    {
        $this->altura = $value;
    }

    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($value)
    {
        $this->peso = $value;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria()//a partir do peso diz qual categoria do lutador
    {
        if($this->peso < 55.2)
            $this->categoria = "invalido";

        else if($this->peso < 70.3)
            $this->categoria = "leve";

        else if($this->peso < 83.9)
            $this->categoria = "medio";
            
        else if($this->peso < 120.2)
            $this->categoria = "pesado";
            
        else 
            $this->categoria = "invalido";
            
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($value)
    {
        $this->vitorias = $value;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($value)
    {
        $this->derrotas = $value;
    }

    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($value)
    {
        $this->empates = $value;
    }
}