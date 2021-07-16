<!DOCTYPE html>
<?php include_once"config.php";?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

            $id = $_POST["id"];//recebe o id 
            $nome = $_POST["nome"];//recebe o nome
            $email = $_POST["email"];//recebe o e-mail

            mysqli_select_db($conn, '$dbname');//selecionando o banco de dados

            $sql = "UPDATE tbformulario SET nome='$nome', email='$email' WHERE id='$id'";//string que contem o comando de update que vai ser enviado ao mySQL

            if( mysqli_query($conn, $sql) )
                echo "<script>alert('Salvo com sucesso! $id'); window.location='busca.php?busca=$nome';</script>";
            else
                echo "Não foi possivel atualizar";

            mysqli_close($conn);

        ?>
    </body>
</html>