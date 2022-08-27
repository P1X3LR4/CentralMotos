<?php

session_start();

//LOGADO
include_once("../Components/Access/Logado.php");

?>

<html>

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- 
        ****************
         COMPONENTS CSS
        ****************
    -->

    <!---------------- FRAMEWORKS CSS ---------------->
    <?php include_once('../Components/Custom/01-FrameworkCss.php'); ?>

    <link rel="stylesheet" href="http://localhost/CentralMotos/Components/Styles/02-StyleConfigPage.css" />

    <title> Central Motos </title>

</head>

<body>

    <!----------------- MENU ------------------>
    <?php include_once('../Components/Layout/Menu.php'); ?>

    <section class="hero is-fullheight bg-dark">
        <div class="hero-body">
            <div class="container-body text-center border-orange">
                <div class="column is-6 is-offset-3 p-4">
                    <img src="http://localhost/CentralMotos/Components/Images/CentralMotos.svg" class="mb-4 svg-logo" width="270">

                    <div class="conteiner has-text-center is-size-3 text-secondary">
                        <form action="../Controllers/03-ProcessLoginClient.php" method="POST">
                            <div class="field">
                                <h4>CPF</h4>
                                <div class="control">
                                    <input name="cpfClient" type="text" id="cpfClient" class="input-is-large form-control">
                                </div>
                            </div>
                            <div class="field">
                                <h4>Senha</h4>
                                <div class="control">
                                    <input name="senhaClient" class="input-is-large form-control" type="password" maxlength="10" size="2">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-lg btn-orange btn-block" value="Entrar" name="LoginClient"></input>
                            <a class href="http://localhost/CentralMotos/Pages/02-PageCadastroClient.php">
                                <h1 class="mt-4 text-secondary" style="font-size: unset !important;">Cadastrar-se</h1>
                            </a>
                            <a class href="http://localhost/CentralMotos/Pages/04-PageLoginFuncionario.php">
                                <h1 class="text-orange" style="font-size: unset !important;">Sou Funcionário</h1>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------- FOOTER ------------------------>
    <?php include_once('../Components/Layout/Footer.php'); ?>

    <!-- 
        ***********************
         COMPONENTS JAVASCRIPT
        ***********************
    -->

    <!---------------------- FRAMEWORKS JAVASCRIPTS ------------------->
    <?php include_once('../Components/Custom/02-FrameworkJavaScript.php'); ?>
    <!------------------- ALERTS JAVASCRIPT ------------------>
    <?php include_once('../Components/Messages/01-AlertsJS.php'); ?>

    <script>
        $(document).ready(function() {

            $("#cpfClient").mask("000.000.000-00")

        })
    </script>

</body>

</html>