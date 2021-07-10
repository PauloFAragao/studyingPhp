<?php
    class Obj_009
    {
        private $nome;
        private $notas;
        private $media;

        public function __construct($nome, $n1, $n2, $n3, $n4)
        {
            $this->nome = $nome;
            $this->notas[0] = $n1;
            $this->notas[1] = $n2;
            $this->notas[2] = $n3;
            $this->notas[3] = $n4;
        }

        private function TirarMedia()
        {
            $this->media = ( $this->notas[0] + $this->notas[1] + $this->notas[2] + $this->notas[3] ) / 4;
        }

        public function Imprimir()
        {
            $this->TirarMedia();

            echo "Nome do aluno: $this->nome";
            echo "<br>";
            echo "Nota do primeiro trimestre: ".$this->notas[0];
            echo "<br>";
            echo "Nota do segundo trimestre: ".$this->notas[1];
            echo "<br>";
            echo "Nota do terceiro trimestre: ".$this->notas[2];
            echo "<br>";
            echo "Nota do quarto trimestre: ".$this->notas[3];
            echo "<br>";
            echo "Média das notas: ".$this->media;

            if( $this->media < 4)
                echo ", aluno reprovado";

            else if( $this->media < 6)
                echo ", aluno de recuperação";

            else 
                echo ", aluno aprovado";
        }

    }
?>