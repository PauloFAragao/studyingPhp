<?php
session_start();

include_once "conexao.php";

if( empty($_POST["usuario"]) || empty($_POST["senha"]) )//se os campos estiverem vazios redireciona para outra pagina
{
    $_SESSION["campos_em_branco"] = true;
    header("Location: cadastro.php");
    exit();
}

$usuario = mysqli_real_escape_string( $conexao, $_POST["usuario"] );//protege contra um sqlInjection
$senha = mysqli_real_escape_string( $conexao, $_POST["senha"] );


if( mysqli_num_rows(//recebe a resposta do banco de dados se já tem um usuario cadastrado com o nome informado
        mysqli_query( $conexao, "SELECT usuario_id, usuario FROM tbusuario WHERE usuario='$usuario';" )//enviando a query para o mysql
    ))
{
    $_SESSION["ja_cadastrado"] = true;
    header("Location: cadastro.php");
    exit();
}
else
{
    $query = "INSERT INTO tbusuario (usuario,senha) VALUES ('$usuario', md5('$senha'))";//query sql

    if( mysqli_query ($conexao, $query ) )//inserindo dentro da tabela os valores e verificando se ocorreu tudo corretamente
    {
        echo "<script>alert('Usuario $usuario cadastrado com sucesso!'); window.location = 'index.php'; </script>";
        exit();
    }
    else
    {
        echo "Deu erro: ".$query."<br>".mysqli_error($conexao);
    }

}