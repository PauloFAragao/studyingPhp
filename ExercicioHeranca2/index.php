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
                require_once "Visitante.php";
                require_once "Professor.php";
                require_once "Bolsista.php";
                require_once "Tecnico.php";

                //aluno
                $al = new Aluno();
                $al->setNome("Pedro");
                $al->setMatricula(1111);
                $al->setIdade(16);
                $al->setSexo("M");
                $al->setCurso("informatica");

                $al->pagarMensalidade();

                //bolsista
                $bo = new Bolsista();
                $bo->setNome("Jubileu");
                $bo->setMatricula(1112);
                $bo->setBolsa(12.5);
                $bo->setIdade(17);
                $bo->setSexo("M");
                $bo->setCurso("administração");

                $bo->pagarMensalidade();

                //tecnico
                $tc = new Tecnico();
                $tc->setNome("Maria");
                $tc->setMatricula(1113);
                $tc->setIdade(14);
                $tc->setSexo("F");
                $tc->setCurso("quimica");

                $tc->praticar();
                $tc->pagarMensalidade();

                //visitante
                $vz = new Visitante();
                $vz->setNome("Gertrudes");
                $vz->setIdade(82);
                $vz->setSexo("F");

                //professor
                $pf = new Professor();
                $pf->setNome("João");
                $pf->setIdade(46);
                $pf->setSexo("M");
                $pf->setEspecialidade("fisica");
                $pf->setSalario(3600.25);

                print_r($al);
                print_r($bo);
                print_r($tc);
                print_r($vz);
                print_r($pf);


            ?>
        </pre>
    </body>
</html>