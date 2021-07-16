<!DOCTYPE html>
<?php include_once"config.php";?>
<?php include_once"top.html";?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $id = $_GET['id'];//recebe o id clicado pelo cliente

            $result_nomes = "SELECT * FROM tbformulario WHERE id LIKE '$id'";//manda selecionar na tabela o que tiver o id igual

            $resultado_nomes = mysqli_query($conn, $result_nomes);//manda pesquisar na tabela

            //mysqli_fetch_array - Obtem uma linha do resultado como uma matriz associativa, numérica, ou ambas
            while ( $rows_nomes = mysqli_fetch_array($resultado_nomes) ) {
                $id = $rows_nomes['id'];
                $nome = $rows_nomes['nome'];
                $email = $rows_nomes['email'];
            }
        ?>

        Pesquisa
        <form action="atualizar.php" method="POST">
            Id<input type="text" name="id" value="<?php echo $id;?>" readonly/><br>
            Nome:<input type="text" name="nome" value="<?php echo $nome;?>"/><br>
            E-mail:<input type="text" name="email" value="<?php echo $email;?>"/><br>
            <input type="submit">
        </form>

    </body>
</html>