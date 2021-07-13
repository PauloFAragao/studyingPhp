<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <pre>
            <?php
                class Mother
                {
                    //atributo
                    private $nome;
                    //construtor
                    public function __construct($nome)
                    {
                        $this->nome = $nome;
                    }
                }

                class Daughter extends Mother
                {
                    //atributo
                    private $idade;
                    //construtor
                    public function __construct($idade, $nome)
                    {
                        $this->idade=$idade;
                        parent::__construct($nome);
                    }
                }

                $obj = new Daughter(20,"Joana");
                
                print_r($obj);

            ?>
        </pre>
    </body>
</html>