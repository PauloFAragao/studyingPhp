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

            //chamando uma função antes da declaração da função
            echo teste(50, 10);

            function teste($valor1, $valor2)
            {
                return "o resultado da divisão entre $valor1 e $valor2 é: ".$valor1/$valor2;
            }

            //chamando uma função depois da declaração da função
            echo "<br>";
            echo teste(35, 92);

        ?>

</body>
</html>