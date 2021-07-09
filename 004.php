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
            //loop for
            for( $value=0; $value<10; $value++ )
            {
                echo "rodando o for pela " . $value . " vez<br>";
            }

            echo"<br>";

            //loop while
            $number=0;
            while ($number < 10) 
            {
                echo "rodando o while pela " . $number . " vez<br>";
                $number++;
            }

            echo"<br>";
            
            //do while
            do
            {
                echo "do while vai rodar só 1 vez";
            }while(false);

        ?>

    </body>
</html>