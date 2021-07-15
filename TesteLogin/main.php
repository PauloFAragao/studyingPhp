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
                session_start();

                if( $_POST["email"] === $_SESSION['email'] &&
                    $_POST["senha"] === $_SESSION['senha'] )
                {
                    echo "Logado com sucesso <br>";
                    echo $_SESSION['email'] ."<br>";
                    echo $_SESSION['senha'] ."<br>";
                    echo $_SESSION['nome'] ."<br>";
                    echo $_SESSION['telefone'] ."<br>";
                }
                else
                {
                    echo "Erro: e-mail ou senha não conferem";
                }
                
            ?>
    </body>
</html>