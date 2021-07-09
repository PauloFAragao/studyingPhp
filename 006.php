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
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "Nome";
            $idade = isset($_GET["idade"]) ? $_GET["idade"] : 0;
            
            echo "$nome tem $idade e ";

            if($idade < 16)
                echo "não pode dirigir e nem votar!";

            else if($idade < 18)
                echo "não pode dirigir e tem voto facultativo!";

            else if($idade < 65)
                echo "pode dirigir e tem voto obrigatorio!";
            
            else
                echo "pode dirigir e tem voto facultativo!";

        ?>
    </body>
</html>