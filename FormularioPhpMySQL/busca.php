<!DOCTYPE html>
<?php include_once "config.php"; ?>
<?php include_once "top.html"; ?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script type="text/javascript">
            function deletar_id()
            {
                if(confirm("Voce deseja deletar esse registro?"))
                    document.forms[0].submit();
                else
                    return false;
            }
        </script>
    </head>
    <body>
        
        Pesquisa
        <table class="table table-hover">
            <th width="5%" style="text-align:left;">Id</th>
            <th width="25%" style="text-align:left;">Nome</th>
            <th width="25%" style="text-align:left;">E-mail</th>
        </table>

        <?php
            $busca = $_GET["busca"];//variavel que recebe o valor do campo busca
            
            $result_nomes = "SELECT * FROM tbformulario WHERE nome LIKE '$busca%' Order By nome ASC limit 10";//manda selecionar tudo da tabela tbfuncionario onde o nome for igual ao que foi buscado ordenando por ordem alfabetica no limite de 10 resultados

            $resultado_nomes = mysqli_query($conn, $result_nomes);//faz uma busca no banco de dados

            $conta = mysqli_num_rows($resultado_nomes);//conta a quantidade de resultados encontrados

            while( $rows_nomes = mysqli_fetch_array($resultado_nomes) )
            {
                echo '<table class="table table-hover"> 
                <td width="5%" align="left"> 
                <a href="editar.php?id='.$rows_nomes["id"].'" title="Editar">'
                .$rows_nomes["id"].'</a></td> 
                <td width="25%" align="left">'.$rows_nomes["nome"].'</td> 
                <td width="25%" align="left">'.$rows_nomes["email"].'</td>
                <td width=""5% align="center">
                <a href="deletar.php?id='.$rows_nomes["id"].'" title="Deletar" onclick="return deletar_id();" class="deletar">Deletar</a></td>
                </table>';
            }
        ?>

        <div>Total: <?php echo $conta;?></div>

    </body>
</html>