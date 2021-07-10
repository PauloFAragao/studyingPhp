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
            class Teste
            {
                private static $b;
                public function __construct()
                {
                    self::$b = 35;
                }

                public function SetPointer(&$value)
                {
                    $value++;
                    echo "<br>".$value." << Dentro da classe";
                }

                public function &GetPointer()
                {
                    return self::$b;
                }

                public function ImpressB()
                {
                    echo self::$b." << Dentro da classe";
                }
            }

            $ob = new Teste;

            $a = 10;
            echo $a." << Fora da classe";
            $ob->SetPointer($a);
            echo "<br> $a << Fora da classe";

            echo "<br>";

            $c = &$ob->GetPointer();
            echo "<br> $c << Fora da classe";
            $c++;
            echo "<br>";
            $ob->ImpressB();
            echo "<br> $c << Fora da classe";

        ?>
    </body>
</html>