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

            //tipos de variaveis

            $value = "String";
            echo $value;
            echo " ";
            echo gettype($value);

            $value = 10;
            echo "<br>".$value;
            echo " ";
            echo gettype($value);

            $value = 85.92;
            echo "<br>".$value;
            echo " ";
            echo gettype($value);

            $value = true;
            echo "<br>".$value;
            echo " ";
            echo gettype($value);

        ?>

    </body>
</html>