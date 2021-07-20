<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="styles.css">

    </head>
    <body>
        <h1 class="text-center"> Página de registro <i class="fa fa-list"></i></h1>
        
        <form method="POST" action="insert_costumer.php">
            <div class="container">
                <div class="form-row">

                    <div class="col-md-6">
                        Nome: <i class="fa fa-user"></i>
                        <input class="form-control" type="text" name="nome" required autofocus>
                    </div>

                    <div class="col-md-6">
                        E-mail: <i class="fa fa-envelope"></i>
                        <input class="form-control" type="email" name="email" required>
                    </div>

                    <div class="col-md-4">
                        C.P.F.: <i class="fa fa-address-card"></i>
                        <input class="form-control" type="text" name="cpf" id ="cpf"required>
                    </div>

                    <div class="col-md-4">
                        Data de nascimento: <i class="fa fa-calendar"></i>
                        <input class="form-control" type="date" name="dtnascimento" required>
                    </div>

                    <div class="col-md-4">
                        Telefone: <i class="fas fa-phone-alt"></i>
                        <input class="form-control" type="text" name="telefone" id="phone" required>
                    </div>

                    <div class="col-md-12">
                        Endereço: <i class="fa fa-map"></i>
                        <input class="form-control" type="text" name="endereco" required><br>
                    </div>

                    <div class="col-md-4">
                        <a href="index.php" class="btn btn-success btn-lg">Voltar <i class="fa fa-arrow-circle-left"></i></a> 
                    </div>

                    <div class="col-md-8 text-right">
                        <button class="btn btn-primary btn-lg">Inserir Cliente <i class="fa fa-user-plus"></i></button>
                    </div>

                </div>
            </div>
        </form>

    </body>
</html>