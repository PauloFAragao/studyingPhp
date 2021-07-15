<!DOCTYPE html>
<?php include_once "config.php";/*inclui o arquivo*/?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];//variavel que recebe o valor do campo nome
            $email = $_POST["email"];//variavel que recebe o valor do campo E-mail
            $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);//cria a conexão com o banco de dados

            mysqli_select_db($conn, '$dbname');//selecionando o banco de dados

            $sql = "INSERT INTO tbformulario (nome,email) VALUES ('$nome', '$email')";//inserindo dentro da tabela os valores

            if(mysqli_query($conn, $sql))//verifica erros
            {
                echo "<script>alert('Salvei seus dados!'); window.location = 'index.php'; </script>";
            }
            else
            {
                echo "Deu erro: ".$sql."<br>".mysqli_error($conn);
            }

            mysqli_close($conn);//fechando conexão

        ?>
    </body>
</html>