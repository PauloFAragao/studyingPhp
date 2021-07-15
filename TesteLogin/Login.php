<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            session_start();

            $_SESSION['email'] = $_POST["email"];
            $_SESSION['senha'] = $_POST["senha"];
            $_SESSION['nome'] = $_POST["nome"];
            $_SESSION['telefone'] = $_POST["telefone"];
        ?>
        <form method="POST" action="main.php">
            <pre>
                <span>E-mail:*</span>
                <input type="text" name="email"/>
                <span>Senha:*</span>
                <input type="password" name="senha"/>

                <input type="submit" value="Login"/>
            </pre>
        </form>

    </body>
</html>


