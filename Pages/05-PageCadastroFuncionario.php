<?php

session_start();

//VERIFICAR ACESSO
include_once("../Components/Access/AccessAdmin.php");

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
            <div class="container-body-cadastro text-center border-orange">
                <div class="column-cadastro is-6-cadastro is-offset-3 p-4">
                    <img src="http://localhost/CentralMotos/Components/Images/CentralMotos.svg" class="mb-4 svg-logo" width="270">

                    <div class="conteiner has-text-center is-size-3 text-secondary">
                        <form action="../Controllers/05-ProcessCadastroFuncionario.php" method="POST">
                            <div class="row mb-4">
                                <div class="col">
                                    <h4>Nome</h4>
                                    <div class="control">
                                        <input name="nomeFuncionario" name="text" class="form-control input-is-large">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4>Sobrenome</h4>
                                    <div class="control">
                                        <input name="sobrenomeFuncionario" class="form-control input-is-large" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <h4>Telefone</h4>
                                    <div class="control">
                                        <input name="telefoneFuncionario" id="maskTelefone" class="form-control input-is-large" type="text">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4>CPF</h4>
                                    <div class="control">
                                        <input name="cpfFuncionario" id="maskCpf" class="form-control input-is-large" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <h4>Email</h4>
                                <div class="control">
                                    <input name="emailFuncionario" class="form-control input-is-large" type="email">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <h4>Idade</h4>
                                    <div class="control">
                                        <input name="idadeFuncionario" id="celular" class="form-control input-is-large" type="text" maxlength="3" size="2">
                                    </div>
                                </div>
                                <div class="col">
                                    <h4>Username</h4>
                                    <div class="control">
                                        <input name="usernameFuncionario" class="form-control input-is-large" type="text" placeholder="Crie nome de usuário">
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <h6 class="text-orange p-2 rounded-top">A Senha tem que possuir no máximo 10 caracteres
                                </h6>
                            </div>

                            <div class="row mb-4 border p-4 border-orange">
                                <div class="col-md-6">
                                    <h4>Senha</h4>
                                    <div class="control">
                                        <input name="senhaFuncionario" class="form-control input-is-large" type="password" placeholder="Crie uma senha" maxlength="10" size="2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4>Confirmar Senha</h4>
                                    <div class="control">
                                        <input name="confirmFuncionario" class="form-control input-is-large" type="password" placeholder="Repita a senha" maxlength="10" size="2">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="control">
                                        <input type="reset" class="btn btn-grey" value="Limpar Campos"></input>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="control">
                                        <input type="submit" class="btn btn-orange" value="Cadastrar Funcionário" name="CadastrarFuncionario"></input>
                                    </div>
                                </div>
                            </div>

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

            $("#maskCpf").mask("000.000.000-00")
            $("#maskTelefone").mask("(00) 0000-00009")

        })
    </script>

</body>

</html>