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

            $modulo = 100 % 6;//modulo entre 2 numeros inteiros
            echo $modulo;

            echo "<br>";
            
            $modulo = fmod(7,3.3);//modulo entre 2 numeros
            echo $modulo;

            echo "<br><br>";

            //verificador de numero par
            $value=11;
            if( fmod($value, 2) == 0 )
           
                echo $value . " é par";
            else
            echo $value . " é impar";

        ?>
    </body>
</html>