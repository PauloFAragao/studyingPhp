<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
        
            class Test
            {
                private $index;
                private $inteiro;
                private $real;
                private $caractere;
                private $string;
                private $boleano;

                //algo parecido com poliformia de sobrecarga
                public function poliformia( $value1 , $value2, $index )
                {
                    switch($index)
                    {
                        case 1://1 inteiro
                            $this->index = $index;
                            $this->inteiro = $value1;
                        break;

                        case 2://1 real
                            $this->index = $index;
                            $this->real = $value1;
                        break;

                        case 3://1 caractere
                            $this->index = $index;
                            $this->caractere = $value1;
                        break;

                        case 4://1 string
                            $this->index = $index;
                            $this->string = $value1;
                        break;

                        case 5://1 boleano
                            $this->index = $index;
                            $this->boleano = $value1;
                        break;

                        case 6://1 inteiro, 1 string
                            $this->index = $index;
                            $this->inteiro = $value1;
                            $this->string = $value2;
                        break;
                    }
                }

                public function printValue()
                {
                    switch($this->index)
                    {
                        case 1://1 inteiro
                            echo "<br>inteiro: " .$this->inteiro;
                        break;

                        case 2://1 real
                            echo "<br>real: " .$this->real;
                        break;

                        case 3://1 caractere
                            echo "<br>caractere: " .$this->caractere;
                        break;

                        case 4://1 string
                            echo "<br>string: " .$this->string;
                        break;

                        case 5://1 boleano
                            echo "<br>boleano: " .$this->boleano;
                        break;

                        case 6://1 inteiro, 1 string
                            echo "<br>inteiro: " .$this->inteiro." string: ".$this->string;
                        break;
                    }
                }
            }

            $p = new Test();

            $p->poliformia( 10, NULL, 1 );
            $p->printValue();

            $p->poliformia( 5.82, NULL, 2 );
            $p->printValue();

            $p->poliformia( 'c', NULL, 3 );
            $p->printValue();

            $p->poliformia( 'olá, mundo!', NULL, 4 );
            $p->printValue();

            $p->poliformia( 'true', NULL, 5 );
            $p->printValue();

            $p->poliformia( '552', "testando uma forma de fazer poliformismo em php", 6 );
            $p->printValue();

        ?>
    </body>
</html>