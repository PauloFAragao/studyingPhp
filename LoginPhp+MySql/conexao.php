<?php

define( 'HOST', '127.0.0.1');   //onde conectar
define( 'USUARIO', 'root');     //usuario do banco
define( 'SENHA', '');           //senha do banco
define( 'DB', 'login');         //nome do banco de dados

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');