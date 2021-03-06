<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>

    <body>
        <section class="hero is-success is-fullheight">

            <div class="hero-body">

                <div class="container has-text-centered">

                    <div class="column is-4 is-offset-4">

                        <?php
                            if( isset( $_SESSION['campos_em_branco'] ) ):
                        ?>
                            <div class="notification is-warning">
                            <p>ERRO: Os campos marcados com* são obrigatorios</p>
                            </div>
                        <?php 
                            endif; 
                            unset($_SESSION["campos_em_branco"]);
                        ?>
                        
                        <?php
                            if( isset( $_SESSION['ja_cadastrado'] ) ):
                        ?>

                        <div class="notification is-danger">
                        <p>ERRO: Usuário já cadastrado.</p>
                        </div>

                        <?php 
                            endif; 
                            unset($_SESSION["ja_cadastrado"]);
                        ?>

                        <div class="box">

                            <div class="field">
                                <div class="title has-text-grey">
                                    <span>Cadastro<span>
                                </div>
                            </div>
                            
                            <form action="cadastrar.php" method="POST">

                                <div class="field">
                                    <div class="control">
                                        <input name="usuario" name="text" class="input is-large" placeholder="Usuário*" autofocus="">
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input name="senha" class="input is-large" type="password" placeholder="Senha*">
                                    </div>
                                </div>

                                <div class="field">
                                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                                </div>

                                <span> <a href="login.php"> Login </a> </span>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    </body>
</html>