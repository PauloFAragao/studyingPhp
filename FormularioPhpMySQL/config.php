<?php

$servidor = "localhost";    //onde conectar
$dbname = "formulario";     //nome do banco de dados
$dbusuario = "root";        //usuario do banco
$dbsenha = "";              //senha do banco
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

if(!$conn)
{
    die("Conexao falhou: ".mysqli_connect_error());
}