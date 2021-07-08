<!DOCTYPE php>
<html>
    <head>
        <title>primeiro programa em php</title>
    </head>
    <body>
        <?php

            $valor1 = 10;
            $valor2 = 20;

            $valor3 = ($valor1+$valor2)/2;

            echo "olá mundo " .$valor3;

            echo "<br/>";

            if($valor3 < 10)
            {
                imprimir( "$valor3 é menor do que 10");
            }
            else if($valor3 < 20)
            {
                imprimir("$valor3 é maior do que 10 e menor do que 20");
            }
            else
            {
                imprimir("$valor3 é maior do que 20");
            }

            function imprimir ($value)
            {
                echo $value;
            }


        ?>
    </body>
</html>