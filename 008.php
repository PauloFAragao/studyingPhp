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

        require_once "Obj_008.php";

        $pessoa = new Obj_008;

        $pessoa->SetNome("Paulo");
        $pessoa->SetIdade(31);

        $pessoa->ImprimirDados();

        echo "<br>";

        echo "recebendo o nome da classe: ".$pessoa->GetNome();
        echo "<br>";
        echo "recebendo a idade da classe: " .$pessoa->GetIdade();

        ?>
        </body>
    </html>