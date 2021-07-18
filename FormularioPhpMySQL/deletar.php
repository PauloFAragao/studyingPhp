<!DOCTYPE html>
<?php include_once "config.php"?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $id = $_GET['id'];//recebe do formulario

            $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);//conexão com o banco de dados

            mysqli_select_db($conn, '$dbname');//seleciona o banco de dados

            $sql = "DELETE FROM tbformulario WHERE id = '$id'";//comando para deletar tudo que tiver o id

            if( mysqli_query($conn, $sql) )//enviando o comando para deletar do banco de daldos
                echo "<script>alert('registro deletado!'); window.location='index.php';</script>";
            else
                echo "Não deletado";

            mysqli_close($conn);//fechando conexão
        ?>
    </body>
</html>