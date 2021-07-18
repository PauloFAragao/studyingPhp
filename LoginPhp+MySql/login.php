<?php
session_start();
include_once "conexao.php";

if( empty($_POST["usuario"]) || empty($_POST["senha"]) )//se os campos estiverem vazios redireciona para outra pagina
{
    header("Location: index.php");
    exit();
}

$usuario = mysqli_real_escape_string( $conexao, $_POST["usuario"] );//protege contra um sqlInjection
$senha = mysqli_real_escape_string( $conexao, $_POST["senha"] );

$query = "SELECT usuario_id, usuario FROM tbusuario WHERE usuario='$usuario' and senha=md5('{$senha}');";//query enviada para o mysql

$result = mysqli_query($conexao, $query);//enviando a query para o mysql

$row = mysqli_num_rows($result);//variavel que recebe a resposta do banco de dados

if($row == 1)//caso o valor retornado seja 1 (validou o logim e a senha)
{
    $_SESSION['usuario']=$usuario; //guarda na seassion o nome do usuario
    header('Location: painel.php');//manda o usuario para o painel.php
    exit();
}
else
{
    $_SESSION["nao_autenticado"] = true;
    header("Location: index.php");
    exit();
}