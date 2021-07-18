<?php
session_start();

if( !isset( $_SESSION["usuario"] ) )//verifica se o usuario está lugado ou tentou entrar diretamente pelo link
{
    header("Location: index.php");
    exit();
}
