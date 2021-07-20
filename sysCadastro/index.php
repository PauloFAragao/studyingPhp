<?php 
    include_once"Manager.php";
    $manager = new Manager();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="styles.css">

    </head>
    <body>
        <div class="container-fluid">

            <h1 class="text-center"> Lista de clientes <i class="fa fa-users"></i></h1>
            <div class="text-right">
                <a href="page_register.php" class="btn btn-primary btn-xs"><i class="fa fa-user-plus"></i></a>
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>CPF</th>
                            <th>Dt Nasc</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th colspan="3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach($manager->listCostume("clientes") as $c): ?>
                            <td><?= $c['nome']; ?></td>
                            <td><?= $c['email']; ?></td>
                            <td><?= $c['cpf']; ?></td>
                            <td><?= $c['dtnascimento']; ?></td>
                            <td><?= $c['endereco']; ?></td>
                            <td><?= $c['telefone']; ?></td>
                            <td>
                                <form method="POST" action="#">
                                    <button class="btn btn-warning btn-xs"><i class="fa fa-user-edit"></i> </button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="#">
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </button>
                                </form>
                            </td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>