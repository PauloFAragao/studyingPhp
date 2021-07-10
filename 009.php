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
            require_once "Obj_009.php";

            $aluno = new Obj_009( $_POST["nome"], $_POST["n1"], $_POST["n2"], $_POST["n3"], $_POST["n4"] );

            $aluno->Imprimir();

            echo "<br><br>";
            print_r($aluno);
        ?>

    </body>
</html>