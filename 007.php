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
            $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Nome";

            $notas[0] = isset($_POST["n1"]) ? $_POST["n1"] : "0";
            $notas[1] = isset($_POST["n2"]) ? $_POST["n2"] : "0";
            $notas[2] = isset($_POST["n3"]) ? $_POST["n3"] : "0";
            $notas[3] = isset($_POST["n4"]) ? $_POST["n4"] : "0";

            $nm =( $notas[0] + $notas[1] + $notas[2] + $notas[3] ) / 4;

            echo "Aluno: $nome ";
            echo "<br>";
            echo "nota do primeiro trimestre: $notas[0]";
            echo "<br>";
            echo "nota do segundo trimestre: $notas[1]";
            echo "<br>";
            echo "nota do terceiro trimestre: $notas[2]";
            echo "<br>";
            echo "nota do quarto trimestre: $notas[3]";
            echo "<br>";
            echo "A media do aluno é: $nm";

            if($nm < 4)
                echo " e o aluno está reprovado";

            else if($nm < 6)
                echo " e o aluno está de recuperação";

            else 
                echo " e o aluno está aprovado";
        ?>
    </body>
</html>