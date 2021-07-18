<?php
session_start();
//unset($_SESSION["NOMEDASESSAO"]);//destroi só uma seção
session_destroy();//destroy todas as seções abertas

header("Location: index.php");
    exit();