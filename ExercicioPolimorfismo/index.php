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
            require_once "Arara.php";
            require_once "Cachorro.php";
            require_once "Canguru.php";
            require_once "Cobra.php";
            require_once "GoldFish.php";
            require_once "Tartaruga.php";

            $a1 = new Arara();
            $a2 = new Cachorro();
            $a3 = new Canguru();
            $a4 = new Cobra();
            $a5 = new GoldFish();
            $a6 = new Tartaruga();

            echo"---Arara---<br>";
            $a1->FazerNinho();
            $a1->locomover();
            $a1->alimentar();
            $a1->emitirSom();

            echo"---Cachorro---<br>";
            $a2->locomover();
            $a2->alimentar();
            $a2->emitirSom();
            $a2->enterrarOsso();
            $a2->abanarRabo();

            echo"---Canguru---<br>";
            $a3->locomover();
            $a3->alimentar();
            $a3->emitirSom();
            $a3->usarBolsa();
            $a3->decerOCacete();

            echo"---Cobra---<br>";
            $a4->locomover();
            $a4->alimentar();
            $a4->emitirSom();

            echo"---goldFish---<br>";
            $a5->locomover();
            $a5->alimentar();
            $a5->emitirSom();
            $a5->soltarBolhas();

            echo"---Tartaruga---<br>";
            $a6->locomover();
            $a6->alimentar();
            $a6->emitirSom();

        ?>
    </body>
</html>