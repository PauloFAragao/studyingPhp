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
            
            $nome = array();//string

            $nome[0] = "corPelo";
            $nome[1] = "idade";
            $nome[2] = "membros";

            for( $i=0; $i<count($nome); $i++ )
            {
                echo "<br>";
                echo "public function get".ucfirst($nome[$i])."()<br>{<br>&nbsp;&nbsp;&nbsp;&nbsp;return \$this->$nome[$i];<br>}";
                echo "<br>";
                echo "public function set".ucfirst($nome[$i])."(\$value)<br>{<br>&nbsp;&nbsp;&nbsp;&nbsp;\$this->$nome[$i] = \$value;<br>}";
                echo "<br>";
            }
            //&emsp; gera um tab mais só funciona no html
        ?>
    </body>
</html>