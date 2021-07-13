<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <pre>
            <?php
                require_once"Aluno.php";
                require_once"Professor.php";
                require_once"Funcionario.php";

                //criando o array de pessoas
                $pessoas = array();

                //criando os objetos
                $pessoas[0] = new Pessoa();
                $pessoas[1] = new Aluno();
                $pessoas[2] = new Professor();
                $pessoas[3] = new Funcionario();

                //setando os nomes
                $pessoas[0]->setNome("Pedro");
                $pessoas[1]->setNome("Maria");
                $pessoas[2]->setNome("Cláudio");
                $pessoas[3]->setNome("Fabiana");

                //setando outros atributos
                $pessoas[0]->setSexo("M");
                $pessoas[1]->setCurso("Informática");
                $pessoas[2]->setSalario(2500.75);
                $pessoas[3]->setSetor("Estoque");
                $pessoas[3]->setSexo("F");

                //leitura dos objetos
                print_r($pessoas[0]);
                print_r($pessoas[1]);
                print_r($pessoas[2]);
                print_r($pessoas[3]);

            ?>
        </pre>
    </body>
</html>