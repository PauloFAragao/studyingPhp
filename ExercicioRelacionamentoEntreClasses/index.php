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
            require_once'Lutador.php';
            require_once'Luta.php';

            $lutadores = array();
            $lutas = array();

            //lutador 1
            $lutadores [0] = new Lutador( "Pretty Boy", "França", 30, 1.75, 68.9, 
                                           11, 2, 1 );
            //lutador 2
            $lutadores [1] = new Lutador( "Putscript", "Brasil", 29, 1.68,  57.8, 
                                            14, 2, 3 );
            //lutador 3
            $lutadores [2] = new Lutador( "SnapShadow", "Eua", 35, 1.65,  80.9, 
                                            12, 2, 1 );
            //lutador 4
            $lutadores [3] = new Lutador( "Dead Code", "Australia", 28, 1.93,  81.6, 
                                            13, 0, 2 );
            //lutador 5
            $lutadores [4] = new Lutador( "UFCobol", "Brasil", 37, 1.70,  119.3, 
                                            5, 4, 3 );
            //lutador 6
            $lutadores [5] = new Lutador( "Nerdaart", "EUA", 30, 1.81,  105.7, 
                                            12, 2, 4 );

            //lutas que vão dar certo
            $lutas[0] = new Luta();
            $lutas[1] = new Luta();
            $lutas[2] = new Luta();
            //lutas não permitidas
            $lutas[3] = new Luta();
            $lutas[4] = new Luta();

            //primeira luta
            $lutas[0]->marcarLuta($lutadores[0], $lutadores[1]);
            $lutas[0]->lutar();

            //segunda luta
            $lutas[1]->marcarLuta($lutadores[2], $lutadores[3]);
            $lutas[1]->lutar();

            //terceira luta
            $lutas[2]->marcarLuta($lutadores[4], $lutadores[5]);
            $lutas[2]->lutar();

            //quarta luta
            $lutas[3]->marcarLuta($lutadores[1], $lutadores[1]);
            $lutas[3]->lutar();

            //quinta luta
            $lutas[4]->marcarLuta($lutadores[2], $lutadores[5]);
            $lutas[4]->lutar();
            
            //imprimindo o status de todos os lutadores
            $lutadores [0]->status();
            $lutadores [1]->status();
            $lutadores [2]->status();
            $lutadores [3]->status();
            $lutadores [4]->status();
            $lutadores [5]->status();

        ?>
    </body>
</html>